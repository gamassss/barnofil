<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

			User::create($validated);

			return redirect('/login')->with('status', 'Registrasi berhasil silahkan login!');
		}
}
