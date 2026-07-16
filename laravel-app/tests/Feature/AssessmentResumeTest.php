<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Services\AssessmentResumeService;
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

    private function cleanup(): void
    {
        $attemptIds = QuestionAnswerMain::where('user_id', self::USER_ID)->pluck('id');
        QuestionAnswers::whereIn('answer_main_id', $attemptIds)->delete();
        QuestionAnswerMain::where('user_id', self::USER_ID)->delete();
        DimensionalQuestionAnswers::where('user_id', self::USER_ID)->delete();
        DimensionalQuestionAnswerMain::where('user_id', self::USER_ID)->delete();
    }
}
