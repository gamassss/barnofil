<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    public function index()
    {
        
        $donasis = DB::select("SELECT programs.nama, donasis.amount, programs.banner_img, donasis.created_at
                            FROM donasis
                            JOIN programs ON donasis.program_id = programs.id
                            WHERE donasis.user_id = " . Auth::user()->id . ";");

        return view('user.program.donasi_saya', compact('donasis'));
    }
}
