<?php

namespace Tests\Feature;

use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\WPUsers;
use Tests\TestCase;

class AssessmentSubmissionRecoveryTest extends TestCase
{
    private const UID = 9294987;

    protected function setUp(): void
    {
        parent::setUp();
        $this->cleanup();
        config(['packages.funnel' => 'free_first']);
        $this->assertFalse(WPUsers::where('user_id', self::UID)->exists());
        $u = new WPUsers();
        $u->user_id = self::UID;
        $u->email = 'transition-diagnosis@example.local';
        $u->date_of_birth = '1990-01-01';
        $u->save();
        $this->withSession(['user_id' => self::UID, 'user_dob' => '1990-01-01']);
    }

    private function cleanup(): void
    {
        $ids = QuestionAnswerMain::whereIn('user_id', [self::UID, self::UID + 1])->pluck('id');
        \App\Models\BrainScores::whereIn('answer_main_id', $ids)->delete();
        QuestionAnswers::whereIn('answer_main_id', $ids)->delete();
        QuestionAnswerMain::whereIn('user_id', [self::UID, self::UID + 1])->delete();
        WPUsers::where('user_id', self::UID)->delete();
        \App\Models\User::where('email', 'transition-diagnosis@example.local')->delete();
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    private function journey(int $lastQuestion = 25): array
    {
        $last = [];
        for ($n = 1; $n <= $lastQuestion; $n++) {
            $q = $this->get('/questions/q'.$n)->assertOk()->viewData('question');
            $last = ['question_no' => $n, 'question_id' => $q->id, 'first_answer' => $q->answer_1, 'second_answer' => $q->answer_2, 'third_answer' => $q->answer_3, 'forth_answer' => $q->answer_4];
            $this->post('/save-answers', $last)->assertRedirect($n === 25 ? '/start-dimentaional-questions' : '/questions/q'.($n + 1));
        }

        return $last;
    }

    public function test_fresh_adult_completes_25_and_reaches_12_question_section(): void
    {
        $this->journey();
        $attempt = QuestionAnswerMain::where('user_id', self::UID)->firstOrFail();
        $this->assertSame('complete', $attempt->status);
        $this->assertSame(25, QuestionAnswers::where('answer_main_id', $attempt->id)->count());
        $this->get('/start-dimentaional-questions')->assertOk()->assertSee('questions/d1');
        $this->get('/questions/d1')->assertOk()->assertViewIs('questions.dimention_question');
    }

    public function test_missing_session_recovers_saved_attempt_and_completes_standard_assessment(): void
    {
        $this->journey(24);
        $attempt = QuestionAnswerMain::where('user_id', self::UID)->firstOrFail();
        $q = $this->get('/questions/q25')->assertOk()->viewData('question');
        session()->forget('answer_main_id');
        $this->post('/save-answers', ['question_no' => 25, 'question_id' => $q->id, 'first_answer' => $q->answer_1, 'second_answer' => $q->answer_2, 'third_answer' => $q->answer_3, 'forth_answer' => $q->answer_4])->assertRedirect('/start-dimentaional-questions');
        $this->assertSame(25, QuestionAnswers::where('answer_main_id', $attempt->id)->count());
        $this->assertSame('complete', $attempt->fresh()->status);
        $this->assertSame(1, QuestionAnswerMain::where('user_id', self::UID)->count());
        $this->get('/questions/d1')->assertOk()->assertViewIs('questions.dimention_question');
    }

    public function test_logout_login_then_direct_question25_submission_completes_saved_attempt(): void
    {
        config(['app.auth_driver' => 'native', 'app.otp_enabled' => false]);
        $u = new \App\Models\User();
        $u->wp_user_id = self::UID;
        $u->email = 'transition-diagnosis@example.local';
        $u->username = 'transition_diagnosis';
        $u->display_name = 'Diagnostic';
        $u->date_of_birth = '1990-01-01';
        $u->status = 'active';
        $u->user_role = '2';
        $u->password = \Illuminate\Support\Facades\Hash::make('SyntheticDiagnostic#2026');
        $u->save();
        $this->journey(24);
        $attempt = QuestionAnswerMain::where('user_id', self::UID)->firstOrFail();
        $this->post('/logout')->assertRedirect('/sign-in')->assertSessionMissing('answer_main_id');
        $this->post('/sign-in', ['user_name' => $u->email, 'password' => 'SyntheticDiagnostic#2026'])->assertRedirect('/')->assertSessionMissing('answer_main_id');
        $q = $this->get('/questions/q25')->assertOk()->viewData('question');
        $this->post('/save-answers', ['question_no' => 25, 'question_id' => $q->id, 'first_answer' => $q->answer_1, 'second_answer' => $q->answer_2, 'third_answer' => $q->answer_3, 'forth_answer' => $q->answer_4])->assertRedirect('/start-dimentaional-questions');
        $this->assertSame(25, QuestionAnswers::where('answer_main_id', $attempt->id)->count());
        $this->assertSame('complete', $attempt->fresh()->status);
        $this->assertSame(1, QuestionAnswerMain::where('user_id', self::UID)->count());
        $this->get('/questions/d1')->assertOk()->assertViewIs('questions.dimention_question');
    }

    public function test_missing_session_on_question1_reuses_existing_attempt(): void
    {
        $this->journey(1);
        $attempt = QuestionAnswerMain::where('user_id', self::UID)->firstOrFail();
        session()->forget('answer_main_id');
        $this->journey(1);
        $this->assertSame(1, QuestionAnswerMain::where('user_id', self::UID)->count());
        $this->assertSame($attempt->id, session('answer_main_id'));
        $this->assertSame(1, QuestionAnswers::where('answer_main_id', $attempt->id)->count());
    }

    public function test_recovery_does_not_use_another_users_attempt(): void
    {
        $other = new QuestionAnswerMain();
        $other->user_id = self::UID + 1;
        $other->save();
        $this->post('/save-answers', ['question_no' => 25])->assertRedirect('/questions/q1');
        $this->assertNull($other->fresh()->status);
        $this->assertSame(0, QuestionAnswers::where('answer_main_id', $other->id)->count());
        $this->assertSame(0, QuestionAnswerMain::where('user_id', self::UID)->count());
    }

    public function test_recovery_does_not_reopen_completed_attempt(): void
    {
        $this->journey();
        $attempt = QuestionAnswerMain::where('user_id', self::UID)->firstOrFail();
        $before = QuestionAnswers::where('answer_main_id', $attempt->id)->orderBy('id')->get()->toArray();
        $this->post('/save-answers', ['question_no' => 25])->assertRedirect('/questions/q1');
        $this->assertSame('complete', $attempt->fresh()->status);
        $this->assertSame($before, QuestionAnswers::where('answer_main_id', $attempt->id)->orderBy('id')->get()->toArray());
    }

    public function test_completing_a_nonfirst_attempt_preserves_both_attempts_and_answers(): void
    {
        $this->journey(24);
        $answered = QuestionAnswerMain::where('user_id', self::UID)->firstOrFail();
        $extra = new QuestionAnswerMain();
        $extra->user_id = self::UID;
        $extra->save();

        // Exercise the destructive branch regardless of MyISAM's physical row order.
        $firstId = QuestionAnswerMain::where('user_id', self::UID)->value('id');
        $active = (int) $firstId === (int) $answered->id ? $extra : $answered;
        $previous = (int) $firstId === (int) $answered->id ? $answered : $extra;
        QuestionAnswers::where('answer_main_id', $answered->id)->update(['answer_main_id' => $active->id]);
        $oldAnswer = QuestionAnswers::where('answer_main_id', $active->id)->firstOrFail()->replicate();
        $oldAnswer->answer_main_id = $previous->id;
        $oldAnswer->save();
        $previousAnswers = QuestionAnswers::where('answer_main_id', $previous->id)->get()->toArray();
        session(['answer_main_id' => $active->id]);

        $q = $this->get('/questions/q25')->assertOk()->viewData('question');
        $this->post('/save-answers', ['question_no' => 25, 'question_id' => $q->id,
            'first_answer' => $q->answer_1, 'second_answer' => $q->answer_2,
            'third_answer' => $q->answer_3, 'forth_answer' => $q->answer_4])
            ->assertRedirect('/start-dimentaional-questions');

        $this->assertNotNull($active->fresh(), 'Completing an attempt must never delete it.');
        $this->assertSame('complete', $active->fresh()->status);
        $this->assertSame(25, QuestionAnswers::where('answer_main_id', $active->id)->count());
        $this->assertSame($previousAnswers, QuestionAnswers::where('answer_main_id', $previous->id)->get()->toArray());
        $this->assertNull($previous->fresh()->status);
        $this->assertTrue(\App\Models\BrainScores::where('answer_main_id', $active->id)->exists());
        $this->assertNotNull(WPUsers::where('user_id', self::UID)->value('brain_profile_id'));
        $this->get('/questions/d1')->assertOk();
    }

    public function test_submission_cannot_modify_another_users_session_attempt(): void
    {
        $other = new QuestionAnswerMain();
        $other->user_id = self::UID + 1;
        $other->save();
        session(['answer_main_id' => $other->id]);
        $q = $this->get('/questions/q2')->assertOk()->viewData('question');
        $this->post('/save-answers', ['question_no' => 2, 'question_id' => $q->id,
            'first_answer' => $q->answer_1, 'second_answer' => $q->answer_2,
            'third_answer' => $q->answer_3, 'forth_answer' => $q->answer_4])->assertForbidden();
        $this->assertSame(0, QuestionAnswers::where('answer_main_id', $other->id)->count());
        $this->assertNull($other->fresh()->status);
    }

    /** @dataProvider previousAttemptStatuses */
    public function test_missing_session_recovers_latest_unfinished_attempt_without_deleting_history(?string $previousStatus): void
    {
        $previous = new QuestionAnswerMain();
        $previous->user_id = self::UID;
        $previous->status = $previousStatus;
        $previous->save();
        $active = new QuestionAnswerMain();
        $active->user_id = self::UID;
        $active->save();
        session(['answer_main_id' => $active->id]);
        $this->journey(24);
        $oldAnswer = QuestionAnswers::where('answer_main_id', $active->id)->firstOrFail()->replicate();
        $oldAnswer->answer_main_id = $previous->id;
        $oldAnswer->save();
        $before = $oldAnswer->fresh()->toArray();
        session()->forget('answer_main_id');
        $q = $this->get('/questions/q25')->assertOk()->viewData('question');
        $this->post('/save-answers', ['question_no' => 25, 'question_id' => $q->id,
            'first_answer' => $q->answer_1, 'second_answer' => $q->answer_2,
            'third_answer' => $q->answer_3, 'forth_answer' => $q->answer_4])
            ->assertRedirect('/start-dimentaional-questions');
        $this->assertSame('complete', $active->fresh()?->status);
        $this->assertSame(25, QuestionAnswers::where('answer_main_id', $active->id)->count());
        $this->assertSame(2, QuestionAnswerMain::where('user_id', self::UID)->count());
        $this->assertSame($previousStatus, $previous->fresh()->status);
        $this->assertSame($before, $oldAnswer->fresh()->toArray());
        $this->assertTrue(\App\Models\BrainScores::where('answer_main_id', $active->id)->exists());
        $this->get('/questions/d1')->assertOk();
    }

    public static function previousAttemptStatuses(): array
    {
        return ['older unfinished attempt' => [null], 'older completed attempt' => ['complete']];
    }
}
