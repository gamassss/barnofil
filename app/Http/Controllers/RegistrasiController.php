<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class RegistrasiController extends Controller
{
    public function signup()
		{
			return view('register');
		}

		public function store(Request $request)
		{
			$validated = $request->validate([
				'name' => 'required',
				'email' => 'required|unique:users',
				'password' => 'required',
				'confirmation_password' => 'required|same:password'
			]);

			$user = User::create($validated);

			event(new Registered($user));

			auth()->login($user);

			return redirect('/email/verify')->with('success', 'Silahkan verifikasi akun di email anda untuk mengaktifkan akun.');
		}
}
