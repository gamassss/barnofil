<?php

namespace App\Http\Controllers\Content;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

        return view('user.content.landing_page', [
            'program_specials' => $program_specials,
        ]);
    }
}
