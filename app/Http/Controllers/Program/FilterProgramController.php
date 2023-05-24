<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterProgramController extends Controller
{
    public function get_program(Request $request)
    {
        // dd($request->input('nama_kategori'));
        if ($request->input('nama_kategori') == 'Bencana') {
            $title = 'Bencana Alam';
            $programs = DB::table('programs')
                ->join('users', 'programs.user_id', '=', 'users.id')
                ->select('programs.*', 'users.name as user_name')
                ->where('programs.kategori_id', '=', 1)
                ->paginate(10);

            return view('user.program.filter_kategori', compact('programs', 'title'));
        } else if ($request->input('nama_kategori') == 'Pendidikan') {
            $title = 'Pendidikan';
            $programs = DB::table('programs')
                ->join('users', 'programs.user_id', '=', 'users.id')
                ->select('programs.*', 'users.name as user_name')
                ->where('programs.kategori_id', '=', 2)
                ->paginate(10);

            return view('user.program.filter_kategori', compact('programs', 'title'));
        } else {
            $title = 'Kemanusiaan';
            $programs = DB::table('programs')
                ->join('users', 'programs.user_id', '=', 'users.id')
                ->select('programs.*', 'users.name as user_name')
                ->where('programs.kategori_id', '=', 3)
                ->paginate(10);

            return view('user.program.filter_kategori', compact('programs', 'title'));
        }

        return view('user.program.filter_kategori', compact('programs', 'title'));
    }

    public function ganti_kategori(Request $req)
    {
        return view('user.program.ganti_kategori_program');
    }

    public function search_program(Request $req)
    {
        $result = $req->input('q');
        $programs = DB::table('programs')
            ->join('users', 'programs.user_id', '=', 'users.id')
            ->select('programs.*', 'users.name as user_name')
            ->where('programs.nama', 'like', '%' . $result . '%')
            ->paginate(10);
        // dd($programs);
        return view('user.program.search_result', compact('programs', 'result'));
    }

    public function sort_program()
    {
        return view('user.program.sort_program');
    }

    public function sort_program_by(Request $req)
    {
        // dd($req->input('sort_by'));
        if ($req->input('sort_by') == 'urgent') {
            $title = 'Paling mendesak';
            $programs = DB::table('programs')
                        ->join('users', 'programs.user_id', '=', 'users.id')
                        ->select('programs.*', 'users.name as user_name')
                        ->where('programs.kategori_id', '=', 2)
                        ->whereRaw('DATEDIFF(programs.tanggal_berakhir, programs.tanggal_mulai) >= 0')
                        ->latest()
                        ->paginate(10);
        } else if ($req->input('sort_by') == 'latest') {
            $title = 'Terbaru';
            $programs = DB::table('programs')
                        ->join('users', 'programs.user_id', '=', 'users.id')
                        ->select('programs.*', 'users.name as user_name')
                        ->where('programs.kategori_id', '=', 2)
                        ->latest()
                        ->paginate(10);
        }

        return view('user.program.sorted_program', compact('programs', 'title'));
    }
}
