<?php

namespace App\Http\Controllers\Content;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
		{
			$program_specials = Program::limit(10)->get();

			return view('user.content.landing_page', [
				'program_specials' => $program_specials
			]);
		}
}
