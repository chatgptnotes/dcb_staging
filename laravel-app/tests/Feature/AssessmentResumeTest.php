<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Services\AssessmentResumeService;
use App\Models\User;
use App\Models\WPUsers;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AssessmentResumeTest extends TestCase
{
    private const USER_ID = 9203901;

    protected function setUp(): void
    {
        parent::setUp();
        $this->cleanup();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    public function test_standard_assessment_resumes_at_the_next_unanswered_question(): void
    {
        $attempt = new QuestionAnswerMain();
        $attempt->user_id = self::USER_ID;
        $attempt->save();

        $answer = new QuestionAnswers();
        $answer->answer_main_id = $attempt->id;
        $answer->question_no = 4;
        $answer->question_id = 4;
        $answer->first_answer = 'A';
        $answer->second_answer = 'B';
        $answer->third_answer = 'C';
        $answer->forth_answer = 'D';
        $answer->save();

        $resume = app(AssessmentResumeService::class);

        $this->assertSame('questions/q5', $resume->resumeRoute(self::USER_ID, '1990-01-01'));
        $this->assertSame('questions/q5', $resume->restore(self::USER_ID, '1990-01-01'));
        $this->assertSame($attempt->id, session('answer_main_id'));
    }

    public function test_dimensional_assessment_resumes_after_a_completed_standard_assessment(): void
    {
        $standard = new QuestionAnswerMain();
        $standard->user_id = self::USER_ID;
        $standard->status = 'complete';
        $standard->save();

        $attempt = new DimensionalQuestionAnswerMain();
        $attempt->user_id = self::USER_ID;
        $attempt->save();

        $answer = new DimensionalQuestionAnswers();
        $answer->user_id = self::USER_ID;
        $answer->question_no = 6;
        $answer->question_id = 6;
        $answer->answer = 'A';
        $answer->user_type = 'adult';
        $answer->category = 'analytical';
        $answer->save();

        $resume = app(AssessmentResumeService::class);

        $this->assertSame('questions/d7', $resume->resumeRoute(self::USER_ID, '1990-01-01'));
        $this->assertSame('questions/d7', $resume->restore(self::USER_ID, '1990-01-01'));
        $this->assertSame($attempt->id, session('d_answer_main_id'));
    }

    public function test_completed_assessments_do_not_offer_resume(): void
    {
        $attempt = new QuestionAnswerMain();
        $attempt->user_id = self::USER_ID;
        $attempt->status = 'complete';
        $attempt->save();

        $this->assertNull(app(AssessmentResumeService::class)->resumeRoute(self::USER_ID, '2014-01-01'));
    }

    public function test_landing_shows_resume_only_for_a_signed_in_user_with_saved_progress(): void
    {
        $attempt = new QuestionAnswerMain();
        $attempt->user_id = self::USER_ID;
        $attempt->save();

        $this->withSession(['user_id' => self::USER_ID, 'user_dob' => '1990-01-01'])
            ->get('/')
            ->assertOk()
            ->assertSee('Resume assessment')
            ->assertSee('Log out');
    }


    /** @dataProvider resumeJourneys */
    public function test_saved_progress_survives_logout_and_native_login(bool $dimensional): void
    {
        config(['app.auth_driver' => 'native', 'app.otp_enabled' => false,
            'packages.funnel' => 'pay_first',
            'packages.plans.decodemybrain-deep-dive' => ['type' => 'one_time']]);
        $user = new User();
        $user->wp_user_id = self::USER_ID;
        $user->username = 'resume_session_test';
        $user->email = 'resume-session@example.local';
        $user->display_name = 'Resume Test';
        $user->date_of_birth = '1990-01-01';
        $user->password = Hash::make('ResumeTest#2026');
        $user->status = 'active';
        $user->user_role = '2';
        $user->save();
        $mirror = new WPUsers();
        $mirror->user_id = self::USER_ID;
        $mirror->email = $user->email;
        $mirror->display_name = $user->display_name;
        $mirror->date_of_birth = $user->date_of_birth;
        $mirror->package = 'decodemybrain-deep-dive';
        $mirror->save();

        $standard = new QuestionAnswerMain();
        $standard->user_id = self::USER_ID;
        if ($dimensional) {
            $standard->status = 'complete';
        }
        $standard->save();
        $attempt = $standard;
        if ($dimensional) {
            $attempt = new DimensionalQuestionAnswerMain();
            $attempt->user_id = self::USER_ID;
            $attempt->save();
            $answer = new DimensionalQuestionAnswers();
            $answer->user_id = self::USER_ID;
            $answer->question_no = 6;
            $answer->question_id = 6;
            $answer->answer = 'A';
            $answer->user_type = 'adult';
            $answer->category = 'analytical';
        } else {
            $answer = new QuestionAnswers();
            $answer->answer_main_id = $attempt->id;
            $answer->question_no = 4;
            $answer->question_id = 4;
            $answer->first_answer = 'A';
            $answer->second_answer = 'B';
            $answer->third_answer = 'C';
            $answer->forth_answer = 'D';
        }
        $answer->save();
        $key = $dimensional ? 'd_answer_main_id' : 'answer_main_id';
        $route = $dimensional ? '/questions/d7' : '/questions/q5';
        $this->withSession(['user_id' => self::USER_ID, 'user_dob' => '1990-01-01', $key => $attempt->id])
            ->post('/logout')->assertRedirect('/sign-in')->assertSessionMissing('user_id')->assertSessionMissing($key);
        $this->get('/assessment/resume')->assertRedirect('/sign-in');
        $this->assertNotNull($answer->fresh());
        $this->post('/sign-in', ['user_name' => $user->email, 'password' => 'ResumeTest#2026'])
            ->assertRedirect('/')->assertSessionHas('user_id', self::USER_ID);
        $this->get('/')->assertOk()->assertSee('Resume assessment');
        $this->get('/assessment/resume')->assertRedirect($route)->assertSessionHas($key, $attempt->id);
        $this->get($route)->assertOk();
        $this->assertNotNull($answer->fresh());
        $this->assertSame(self::USER_ID, (int) $attempt->fresh()->user_id);
    }

    public static function resumeJourneys(): array
    {
        return ['standard assessment' => [false], 'dimensional assessment' => [true]];
    }

    private function cleanup(): void
    {
        User::where('email', 'resume-session@example.local')->delete();
        WPUsers::where('user_id', self::USER_ID)->delete();
        $attemptIds = QuestionAnswerMain::where('user_id', self::USER_ID)->pluck('id');
        QuestionAnswers::whereIn('answer_main_id', $attemptIds)->delete();
        QuestionAnswerMain::where('user_id', self::USER_ID)->delete();
        DimensionalQuestionAnswers::where('user_id', self::USER_ID)->delete();
        DimensionalQuestionAnswerMain::where('user_id', self::USER_ID)->delete();
    }
}
