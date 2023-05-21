<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DonasiController extends Controller
{
    public function index()
    {
        
        $donasis = DB::select("SELECT programs.nama, donasis.amount, programs.banner_img, donasis.created_at, doas.doa, doas.id AS doa_id, doas.like
                            FROM donasis
                            JOIN programs ON donasis.program_id = programs.id
                            JOIN doas ON doas.donasi_id = donasis.id
                            WHERE donasis.user_id = " . Auth::user()->id . ";");
        // dd($donasis);
        $jumlah_donasi = DB::select("SELECT COUNT(*) as total_donasi FROM donasis where user_id = " . Auth::user()->id . ";");
        
        return view('user.program.donasi_saya', compact('donasis', 'jumlah_donasi'));
    }
}
