<?php

namespace App\Http\Controllers\Content;

use App\Models\Doa;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $program_specials = DB::table('programs')
            ->select('*')
            ->whereRaw('total_dana / target_dana > 0.35 AND total_dana > 1000000')
            ->limit(10)
            ->latest()
            ->get();

        $program_pilihans = DB::table('programs')
            ->select('programs.*', 'users.name as user_name')
            ->join('users', 'programs.user_id', '=', 'users.id')
            ->where('users.account_verified', 1)
            ->whereRaw('total_dana / target_dana > 0.38')
            ->get();

        $program_kategoris = DB::select(DB::raw("SELECT users.name as user_name, programs.nama, programs.id, programs.total_dana,
																									programs.tanggal_mulai, programs.tanggal_berakhir, programs.banner_img from programs
																								JOIN users on users.id = programs.user_id
																								WHERE programs.total_dana > 1000000000
																								LIMIT 3
																								"));
        $doas = DB::select(DB::raw("SELECT doas.doa, users.name as user_name, doas.like, programs.nama as program_nama, doas.id from doas
																		JOIN users on users.id = doas.user_id
																		JOIN programs on programs.id = doas.program_id
																		LIMIT 10
																	"));
        // dd($doas);
        return view('user.content.landing_page', [
            'program_specials' => $program_specials,
            'program_pilihans' => $program_pilihans,
            'program_kategoris' => $program_kategoris,
            'doas' => $doas,
        ]);
    }

    public function increaseLikes($id)
    {
        $doa = Doa::find($id);
        $doa->like++;
        $doa->save();
    }

    public function decreaseLikes($id)
    {
        $doa = Doa::find($id);
        $doa->like--;
        $doa->save();
    }
}
