<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doa;
use App\Models\Donasi;
use App\Models\Program;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index($id, $user_id)
    {
        $program = Program::find($id);
        // $user = User::find($user_id);
        // dd($id);
        return view('user.payment.nominal', [
            'id' => $id,
            // 'user_id' => $user->id,
            // 'username' => $user->name,
            'nama' => $program->nama,
            // 'user_email' => $user->email
        ]);
    }

    public function isiDoa($id, $user_id, $nominal)
    {
        $user = User::find($user_id);
        $program = Program::find($id);
        // dd($program, $user, $nominal);

        // jika belum donasi harap login
        if (!$user) {
            return view('user.auth.login');
        }

        return view('user.payment.isi_doa', [
            'id' => $id,
            'user_id' => $user->id,
            'username' => $user->name,
            'nama' => $program->nama,
            'user_email' => $user->email,
            'nominal' => intval($nominal),
        ]);
    }

    public function payment(Request $request)
    {

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
        // dd($request->amount);
        $amount = $request->amount;
        // parsing uang
        $amount = intval(preg_replace('/[^0-9]+/', '', $amount));
        // dd($amount);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $amount,
            ),
            'customer_details' => array(
                'first_name' => $nama_depan,
                'last_name' => $nama_belakang,
                'email' => $request->email,
            ),
        );

        $program = Program::find($request->program_id);
        $program->total_dana = $program->total_dana + $amount;
        $program->save();

        try {
            $anonim = $request->anonim ? true : false;
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        $donasi = Donasi::create([
            'user_id' => $request->user_id,
            'program_id' => $request->program_id,
            'amount' => $amount,
            'anonim' => $anonim,
        ]);

        try {
            $donasi_id = $donasi->id;
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        // dd($request->anonim, $request->doa, $request->user_id, $anonim, $donasi_id);
        try {
            $doa = Doa::create([
                'donasi_id' => $donasi_id,
                'doa' => $request->doa,
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        // dd($doa);

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view('user.payment.payment', [
            'snap_token' => $snapToken,
        ]);
    }

    public function handleWebhook(Request $request)
    {
        // Capture Midtrans response
        $response = $request->all();

        // Validate the response to ensure it is from Midtrans
        // ...

        // Check if the payment was successful
        if ($response['transaction_status'] == 'capture') {
            // Payment was successful

            // Get the relevant data from the response
            $orderID = $response['order_id'];
            $amount = $response['gross_amount'];
            // ...

            // Update the relevant data in your database
            $donasi = Donasi::where('order_id', $orderID)->first();
            if ($donasi) {
                $donasi->status = 'paid';
                $donasi->save();
            }

            // Perform other necessary actions or processing
            // ...
        }

        // ...
    }

}
