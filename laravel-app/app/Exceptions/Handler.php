<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (HttpExceptionInterface $exception, Request $request) {
            if ($exception->getStatusCode() !== 419 || $request->expectsJson()
                || ! $request->isMethod('post') || ! $request->is('sign-up', 'verify-email-otp')) {
                return null;
            }

            if ($request->is('verify-email-otp') && $request->session()->has('pending_signup')) {
                return redirect('verify-email-otp')
                    ->with('fail', 'This form expired. Please enter your verification code again.')
                    ->header('Cache-Control', 'no-store, private');
            }

            $response = redirect('sign-up')
                ->with('fail', 'Your signup form expired. Please check your details, re-enter your password, and submit again.')
                ->header('Cache-Control', 'no-store, private');

            // Do not replay the rejected POST or retain passwords/verification codes.
            if ($request->is('sign-up')) {
                $response->withInput($request->only([
                    'first_name', 'last_name', 'user_name', 'dob', 'email', 'country', 'phone',
                ]));
            }

            return $response;
        });

        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
