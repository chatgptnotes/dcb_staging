<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use Carbon\Carbon;

/** Restores unfinished assessment state from the answer records in MySQL. */
final class AssessmentResumeService
{
    /** The public header action, based on persisted entitlement and progress. */
    public function navigationAction(int $userId): array
    {
        $dashboard = ['label' => 'Dashboard', 'url' => url('dashboard')];
        $user = \App\Models\WPUsers::where('user_id', $userId)->first();
        if (! $user || (config('packages.funnel') === 'pay_first'
            && ! app(\App\Services\Billing\PackageCatalog::class)->isPaid($user->package))) {
            return $dashboard;
        }

        if ($attempt = $this->incompleteStandardAttempt($userId)) {
            $hasAnswers = QuestionAnswers::where('answer_main_id', $attempt->id)->exists();

            return ['label' => $hasAnswers ? 'Resume assessment' : 'Start assessment',
                'url' => route('assessment.resume')];
        }

        if ($this->resumeRoute($userId, $user->date_of_birth)) {
            return ['label' => 'Resume assessment', 'url' => route('assessment.resume')];
        }

        if ($user->brain_profile_id || QuestionAnswerMain::where('user_id', $userId)->where('status', 'complete')->exists()) {
            return $dashboard;
        }

        return ['label' => 'Start assessment', 'url' => url('questions/q1')];
    }

    public function resumeRoute(int $userId, ?string $dateOfBirth): ?string
    {
        if ($attempt = $this->incompleteStandardAttempt($userId)) {
            $lastQuestion = (int) QuestionAnswers::where('answer_main_id', $attempt->id)->max('question_no');

            return 'questions/q'.min(25, max(1, $lastQuestion + 1));
        }

        if ($this->requiresDimensionalAssessment($dateOfBirth) && ($attempt = $this->incompleteDimensionalAttempt($userId))) {
            // Legacy dimensional answers are linked by user_id, not attempt id.
            $lastQuestion = (int) DimensionalQuestionAnswers::where('user_id', $userId)->max('question_no');

            return 'questions/d'.min(12, max(1, $lastQuestion + 1));
        }

        return null;
    }

    public function restore(int $userId, ?string $dateOfBirth): ?string
    {
        if ($attempt = $this->incompleteStandardAttempt($userId)) {
            session(['answer_main_id' => $attempt->id]);

            return $this->resumeRoute($userId, $dateOfBirth);
        }

        if ($this->requiresDimensionalAssessment($dateOfBirth) && ($attempt = $this->incompleteDimensionalAttempt($userId))) {
            session(['d_answer_main_id' => $attempt->id]);

            return $this->resumeRoute($userId, $dateOfBirth);
        }

        return null;
    }

    private function incompleteStandardAttempt(int $userId): ?QuestionAnswerMain
    {
        return QuestionAnswerMain::where('user_id', $userId)
            ->where(fn ($query) => $query->whereNull('status')->orWhere('status', '!=', 'complete'))
            ->latest('id')
            ->first();
    }

    private function incompleteDimensionalAttempt(int $userId): ?DimensionalQuestionAnswerMain
    {
        return DimensionalQuestionAnswerMain::where('user_id', $userId)
            ->where(fn ($query) => $query->whereNull('status')->orWhere('status', '!=', 'complete'))
            ->latest('id')
            ->first();
    }

    private function requiresDimensionalAssessment(?string $dateOfBirth): bool
    {
        try {
            return $dateOfBirth !== null && Carbon::parse($dateOfBirth)->age >= 15;
        } catch (\Throwable) {
            return false;
        }
    }
}
