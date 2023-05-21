<?php

namespace App\Http\Controllers\Program;

use App\Models\Program;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class SubmissionController extends Controller
{
    public function index_waiting()
    {
        if(request()->ajax()) {
            return DataTables::of(Program::where('status', 'menunggu')->latest()->get())
            ->addIndexColumn()
            ->addColumn('action', 'layout.button.program_button')
            ->make(true);
        }
        // dd('masuk');
        return view('admin.program.program_waiting');
    }

    public function index_approved()
    {
        if(request()->ajax()) {
            return DataTables::of(Program::where('status', 'disetujui')->latest()->get())
            ->addIndexColumn()
            ->addColumn('action', 'layout.button.program_button')
            ->make(true);
        }
        // dd('masuk');
        return view('admin.program.program_approved');
    }

    public function index_rejected()
    {
        if(request()->ajax()) {
            return DataTables::of(Program::where('status', 'ditolak')->latest()->get())
            ->addIndexColumn()
            ->addColumn('action', 'layout.button.program_button')
            ->make(true);
        }
        // dd('masuk');
        return view('admin.program.program_rejected');
    }
}
