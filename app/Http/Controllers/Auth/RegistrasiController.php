<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

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
            'confirmation_password' => 'required|same:password',
        ]);
        // dd($validated);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        // dd($user);
        try {
            event(new Registered($user));

            auth()->login($user);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        if ($user->metode_registrasi == 'form') {
            return redirect('/email/verify')->with('success', 'Silahkan verifikasi akun di email anda untuk mengaktifkan akun.');
        }

        return redirect('/');
    }
}
