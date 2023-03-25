<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $nama = Auth::user()->name;
            $words = explode(" ", $nama); // memecah string menjadi array kata-kata
            $init = "";

            foreach ($words as $word) {
                $init .= strtoupper(substr($word, 0, 1)); // mengambil 2 karakter pertama dan menggabungkan
            }

						$init = substr($init, 0, 2);
						
						return view('user.auth.login', [
							'inisial' => $init,
							'nama' => $nama
						]);
        }

				return view('user.auth.login');
    }
}
