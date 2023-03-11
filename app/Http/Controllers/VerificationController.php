<?php

namespace App\Http\Controllers;

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
			return view('verify.after_verified');
		}
}
