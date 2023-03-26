<?php

namespace App\Http\Controllers\Auth;

use DateTime;
use App\Models\User;
use Exception;
use App\Models\SocialAccount;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProvideCallback($provider)
    {
			// dd($provider);
			try {
				$user = Socialite::driver('google')->stateless()->user();
			} catch (Exception $e) {
				return redirect()->back();
			}
			// dd($user);
			// find or create user and send params user get from socialite and provider
			$authUser = $this->findOrCreateUser($user, 'google');
			
        // login user
        Auth()->login($authUser, true);

        // setelah login redirect ke dashboard
        return redirect()->intended('/')->with('success', 'Selamat akun anda sudah terdaftar!');
    }

    public function findOrCreateUser($socialUser, $provider)
    {
        // Get Social Account
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
				->where('provider_name', 'google')
				->first();
				
        // Jika sudah ada
        if ($socialAccount) {
            // return user
            return $socialAccount->user;

            // Jika belum ada
					} else {

            // User berdasarkan email
            $user = User::where('email', $socialUser->getEmail())->first();
						
            // Jika Tidak ada user
            if (!$user) {
                // Create user baru
                $today = new DateTime();
                $todayStr = $today->format('Y-m-d');
								
                try{
									$user = User::create([
										'name' => $socialUser->getName(),
										'email' => $socialUser->getEmail(),
										'role' => 'user',
										'email_verified_at' => $todayStr,
										'metode_registrasi' => 'google',
										'email_verified' => true,
										'account_verified' => true
									]);
								} catch(QueryException $e) {
									dd($e->getMessage());
								}

								// dd($user);
            }

            // Buat Social Account baru
            $user->socialAccounts()->create([
                'provider_id' => $socialUser->getId(),
                'provider_name' => $provider,
            ]);

            // return user
            return $user;
        }
    }
}
