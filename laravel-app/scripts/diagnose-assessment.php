<?php
/** Read-only CLI investigation. Run from the deployed Laravel application:
 * php scripts/diagnose-assessment.php patient@example.com
 * Prints progress metadata only; never prints answers, passwords or session tokens.
 */
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}
$emails = array_values(array_filter(array_slice($argv, 1), fn ($v) => filter_var($v, FILTER_VALIDATE_EMAIL)));
if (!$emails || count($emails) !== count($argv) - 1) {
    fwrite(STDERR, "Usage: php scripts/diagnose-assessment.php email [alternate-email]\n");
    exit(1);
}
$root = dirname(__DIR__);
require $root.'/vendor/autoload.php';
$app = require $root.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;

try {
    $native = DB::table('users')->whereIn('email', $emails)->get(['id', 'wp_user_id', 'email', 'date_of_birth']);
    $mirrors = DB::table('wp_users')->whereIn('email', $emails)
        ->orWhereIn('user_id', $native->pluck('wp_user_id')->filter()->all())
        ->get(['user_id', 'email', 'brain_profile_id', 'date_of_birth']);
    $ids = $native->pluck('wp_user_id')->merge($mirrors->pluck('user_id'))->filter()->unique();
    $report = [
        'captured_at_utc' => gmdate('c'),
        'app_url' => config('app.url'),
        'session_config' => [
            'driver' => config('session.driver'), 'lifetime_minutes' => config('session.lifetime'),
            'domain' => config('session.domain'), 'secure' => config('session.secure'),
        ],
        'controller_sha256' => hash_file('sha256', $root.'/app/Http/Controllers/QuestionsController.php'),
        'native_matches' => $native->map(fn ($u) => ['id' => $u->id, 'user_id' => $u->wp_user_id, 'email' => $u->email])->all(),
        'accounts' => [],
    ];
    foreach ($ids as $id) {
        $mirror = $mirrors->firstWhere('user_id', $id);
        $n = $native->firstWhere('wp_user_id', $id);
        $attempts = DB::table('question_answers_main')->where('user_id', $id)->orderBy('id')->get(['id', 'status', 'created_at', 'updated_at']);
        $account = [
            'user_id' => $id, 'mirror_exists' => $mirror !== null,
            'brain_profile_id' => $mirror?->brain_profile_id,
            'native_dob_present' => !empty($n?->date_of_birth),
            'mirror_dob_present' => !empty($mirror?->date_of_birth),
            'attempt_selected_by_completion_check' => DB::table('question_answers_main')->where('user_id', $id)->value('id'),
            'standard_attempts' => [],
        ];
        foreach ($attempts as $attempt) {
            $numbers = DB::table('question_answers')->where('answer_main_id', $attempt->id)->pluck('question_no')->map(fn ($v) => (int) $v);
            $scores = DB::table('brain_scores')->where('answer_main_id', $attempt->id)->get(['id', 'result_code']);
            $account['standard_attempts'][] = [
                'id' => $attempt->id, 'status' => $attempt->status,
                'created_at' => $attempt->created_at, 'updated_at' => $attempt->updated_at,
                'answer_rows' => $numbers->count(), 'distinct_questions' => $numbers->unique()->count(),
                'missing_questions' => array_values(array_diff(range(1, 25), $numbers->all())),
                'numeric_last_question' => $numbers->max(),
                'resume_sql_max_question' => DB::table('question_answers')->where('answer_main_id', $attempt->id)->max('question_no'),
                'scores' => $scores->map(fn ($s) => [
                    'id' => $s->id, 'result_code' => $s->result_code,
                    'matching_profile_ids' => DB::table('profile_types')->whereJsonContains('code', $s->result_code)->pluck('id')->all(),
                ])->all(),
            ];
        }
        $account['dimensional_attempts'] = DB::table('dimensional_question_answers_main')->where('user_id', $id)->orderBy('id')->get(['id', 'status', 'created_at', 'updated_at'])->all();
        $account['dimensional_answer_count'] = DB::table('dimensional_question_2_answer')->where('user_id', $id)->count();
        $report['accounts'][] = $account;
    }
    echo json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR).PHP_EOL;
} catch (Throwable $e) {
    fwrite(STDERR, 'Diagnostic failed ('.get_class($e)."). Check server logs; no record changes were requested.\n");
    exit(2);
}
