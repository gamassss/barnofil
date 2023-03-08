<?php

namespace App\Http\Controllers\Program;

use DataTables;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
					return DataTables::of(Program::query())
					->addIndexColumn()
					->addColumn('action', 'layout.button.program_button')
					->make(true);
				}

				return view('admin.program.program');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program = Program::find($program->id);
				$program->delete();

				return redirect()->back();
    }

		public function trash()
		{
			if(request()->ajax()) {
				return DataTables::of(Program::onlyTrashed()->get())
				->addIndexColumn()
				->addColumn('action', 'layout.button.restore_program_button')
				->make(true);
			}

			return view('admin.program.trashed_program');
		}

		public function restore($id)
		{
			$program = Program::onlyTrashed()->where('id', $id);
			$program->restore();

			return redirect('/admin/trashed/program');
		}
}
