<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FilterProgramController extends Controller
{
    public function get_program_bencana()
    {
        $programs = DB::table('programs')
            ->join('users', 'programs.user_id', '=', 'users.id')
            ->select('programs.*', 'users.name as user_name')
            ->where('programs.kategori_id', '=', 1)
            ->paginate(10);
        // dd($programs);
        return view('user.program.kategori_bencana', compact('programs'));
    }

    // public function get_more_program_bencana(Request $request)
    // {
    //     $offset = $request->input('offset');
    //     $limit = 10;

    //     $programs = DB::select("SELECT * FROM programs WHERE kategori_id = 1 LIMIT $limit OFFSET $offset");

    //     $html = '';
    //     foreach ($programs as $program) {
    //         $html .= view('user.program.program_item', ['program' => $program])->render();
    //     }

    //     return $html;
    // }
}
