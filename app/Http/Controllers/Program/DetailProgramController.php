<?php

namespace App\Http\Controllers\Program;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DetailProgramController extends Controller
{
    public function index($id)
		{
			$program = Program::find($id);
			
			return view('user.program.detail_program', [
				'id' => $id,
				'banner' => $program->banner_img,
				'nama' => $program->nama,
				'total_dana' => $program->total_dana,
				'target_dana' => $program->target_dana,
				'tanggal_mulai' => $program->tanggal_mulai,
				'tanggal_berakhir' => $program->tanggal_berakhir,
				'nama_penggalang' => $program->user->name,
				'deskripsi' => $program->deskripsi
			]);
		}
}
