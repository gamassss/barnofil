<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Doa;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        try {
            $program_specials = DB::table('programs')
                ->select('*')
                ->whereRaw('total_dana / target_dana > 0.35 AND total_dana > 1000000')
                ->limit(10)
                ->latest()
                ->get();
        } catch (QueryException $e) {
            dd($e->getMessage());
        }

        try {
            $program_pilihans = DB::table('programs')
                ->select('programs.*', 'users.name as user_name')
                ->join('users', 'programs.user_id', '=', 'users.id')
                ->where('users.account_verified', 1)
                ->whereRaw('total_dana / target_dana > 0.38')
                ->get();
        } catch (QueryException $e) {
            dd($e->getMessage());
        }

        try {
            $program_kategoris = DB::select(DB::raw("SELECT users.name as user_name, programs.nama, programs.id, programs.total_dana,
																										programs.tanggal_mulai, programs.tanggal_berakhir, programs.banner_img from programs
																										JOIN users on users.id = programs.user_id
																										WHERE programs.total_dana > 1000000000
																										LIMIT 3
																										"));
        } catch (QueryException $e) {
            dd($e->getMessage());
        }

        try {
            $doas = DB::select(DB::raw("SELECT doas.doa, CASE
																													WHEN donasis.anonim = 1 THEN 'Orang Baik'
																													ELSE users.name
																													END AS user_name,
																				doas.like, programs.nama as program_nama, doas.id, doas.created_at from doas
																				JOIN donasis on donasis.id = doas.donasi_id
																				JOIN users on users.id = donasis.user_id
																				JOIN programs on programs.id = donasis.program_id
																				ORDER BY doas.created_at desc
																				LIMIT 10
																			"));
        } catch (QueryException $e) {
            dd($e->getMessage());
        }

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
