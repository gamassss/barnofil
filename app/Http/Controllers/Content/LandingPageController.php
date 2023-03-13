<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $program_specials = DB::table('programs')
            ->select('*')
            ->whereRaw('total_dana / target_dana > 0.38')
            ->limit(10)
            ->latest()
            ->get();

        $program_pilihans = DB::table('programs')
            ->select('programs.*', 'users.name as user_name')
            ->join('users', 'programs.user_id', '=', 'users.id')
            ->where('users.account_verified', 1)
            ->get();
				// dd($program_pilihans);
        return view('user.content.landing_page', [
            'program_specials' => $program_specials,
            'program_pilihans'=> $program_pilihans,
        ]);
    }
}
