<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function get_most_donatur()
    {

        if (request()->ajax()) {
            $donaturs = DB::select("SELECT user_id, COUNT(*) AS frequency, users.name, users.email
                                    FROM donasis
                                    JOIN users ON donasis.user_id = users.id
                                    GROUP BY user_id
                                    ORDER BY frequency DESC
                                    LIMIT 5;");

            return DataTables::of($donaturs)
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.dashboard');

    }

    public function get_most_amount_donatur()
    {
        if (request()->ajax()) {
            $donaturs = DB::select("SELECT user_id, CONCAT('Rp.', ' ', FORMAT(SUM(amount), 0, 'id_ID')) AS total_amount, users.name, users.email
                                    FROM donasis
                                    JOIN users ON users.id = donasis.user_id
                                    GROUP BY user_id, users.name, users.email
                                    ORDER BY SUM(amount) DESC
                                    LIMIT 5;");

            return DataTables::of($donaturs)
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.dashboard');
    }

    public function get_transaksis()
    {
        if (request()->ajax()) {
            $transaksis = DB::select("SELECT users.name, programs.nama AS nama_program, CONCAT('Rp', ' ', FORMAT(amount, 0, 'id_ID')) AS formatted_amount, users.email
                                    FROM donasis
                                    JOIN programs ON donasis.program_id = programs.id
                                    JOIN users ON donasis.user_id = users.id;");

            return DataTables::of($transaksis)
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.user.transaksi');
    }
}
