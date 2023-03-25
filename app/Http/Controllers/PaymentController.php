<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\User;
use Midtrans\Config;
use App\Models\Donasi;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index($id, $user_id)
    {
        $program = Program::find($id);
        $user = User::find($user_id);

        return view('user.payment.nominal', [
            'id' => $id,
            'user_id' => $user->id,
            'username' => $user->name,
            'nama' => $program->nama,
						'user_email' => $user->email
        ]);
    }

    public function payment(Request $request)
    {
        // dd($request->get('total_dana'));
        \Midtrans\Config::$serverKey = 'SB-Mid-server-hSPOSrCoM9BqFhad8Qg8mLUi';

        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;

        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;

        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $nama = $request->username;
        $nama_arr = explode(" ", $nama); // memecah string berdasarkan spasi dan menempatkan hasilnya ke dalam array
        $nama_depan = $nama_arr[0]; // mengambil kata pertama dari array sebagai first name
        $nama_belakang = $nama_arr[count($nama_arr) - 1];

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->total_dana,
            ),
            'customer_details' => array(
                'first_name' => $nama_depan,
                'last_name' => $nama_belakang,
                'email' => $request->email,
                'phone' => '08111222333',
            ),
        );

				$program = Program::find($request->program_id);
				$program->total_dana = $program->total_dana + $request->total_dana;
				$program->save();

				Donasi::create([
					'user_id' => $request->user_id,
					'program_id' => $request->program_id,
					'amount' => $request->total_dana
				]);

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view('user.payment.payment', [
            'snap_token' => $snapToken,
        ]);
    }
}
