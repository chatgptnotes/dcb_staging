<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\WPUsers;
use App\Models\DimensionalQuestionAnswerMain;
use Carbon\Carbon;

class AuthQuestionAnswered
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = session('user_id');
        $dob = session('user_dob');

        // ✅ Validate that session data exists
        if (!$userId || !$dob) {
            return redirect('sign-in')->with('fail', 'Your session expired. Please sign in again.');
        }

        // ✅ Calculate age safely
        $age = Carbon::parse($dob)->age;

        // ✅ Retrieve related records (handle missing cases gracefully)
        $wpUser = WPUsers::where('user_id', $userId)->first();
        $dAnswer = DimensionalQuestionAnswerMain::where('user_id', $userId)->first();

        // ✅ Step 1: Must complete first question set to get brain_profile_id
        if (!$wpUser || empty($wpUser->brain_profile_id)) {
            return redirect('questions/q1');
        }

        // ✅ Step 2: If age >= 15, must complete dimensional test
        if ($age >= 15) {
            if ($dAnswer && $dAnswer->status === 'complete') {
                return $next($request);
            } else {
                return redirect('questions/d1');
            }
        }

        // ✅ Step 3: If under 15, skip dimensional test
        return $next($request);
    }
}
