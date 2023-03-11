<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{

    protected $redirectTo = '/email/verified-success';

    public function notice()
    {
        return view('verify.email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/email/verified-success');
    }

    public function after_verified()
    {
        if (session()->has('verification_success')) {
            // If the user has already seen the verification success message, redirect them to the home page or some other page
            return redirect('/login');
        }

        // Mark the user's verification_success as true in the database
        auth()->user()->update(['verification_success' => true]);

        // Store a session variable to indicate that the user has seen the verification success message
        session()->put('verification_success', true);

        return view('verify.after_verified');
    }

		public function send(Request $request)
		{
			$request->user()->sendEmailVerificationNotification();

			return back()->with('status', 'We have sent you a verification link. Please check your email.');
		}
}
