<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Program;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalangDanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.program.galang_dana');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $kategori = Kategori::where('nama_kategori', $request->input('nama_kategori'))->first();

        return view('user.program.add_galang_dana', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'user_id' => 'required',
            'kategori_id' => 'required',
            'nama' => 'required',
            'target_dana' => 'required',
            'deskripsi' => 'required',
            'banner_img' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
        ]);

        $validated_data['target_dana'] = str_replace('.', '', $validated_data['target_dana']);
        $validated_data['tanggal_mulai'] = $this->formatDateString($validated_data['tanggal_mulai']);
        $validated_data['tanggal_berakhir'] = $this->formatDateString($validated_data['tanggal_berakhir']);
        $validated_data['banner_img'] = 'img/program_banners/' . $validated_data['banner_img'];

        try {
            if ($request->hasFile('banner_img')) {
                $image = $request->file('banner_img');

                // Membuat nama unik untuk gambar
                $imageName = time() . '_' . $image->getClientOriginalName();
                // Menghindari konflik nama file dengan menambahkan angka unik
                $i = 1;
                while (Storage::disk('public')->exists('img/program_banners/' . $imageName)) {
                    $imageName = time() . '_' . $i . '_' . $image->getClientOriginalName();
                    $i++;
                }
                
                $image->storeAs('img/program_banners', $imageName, 'public');
            }
        } catch (\Exception $e) {
            // Menangkap exception dan mendapatkan pesan error
            $errorMessage = $e->getMessage();
            
            // Lakukan tindakan yang sesuai dengan pesan error, seperti menampilkan pesan kepada pengguna atau mencatat error tersebut
            
            // Contoh: Menampilkan pesan error
            echo "Terjadi kesalahan: " . $errorMessage;
        }
        
        try {
            $validated_data['banner_img'] = 'storage/img/program_banners/' . $imageName;
            // Kode yang berpotensi menimbulkan exception
            Program::create($validated_data);
            // dd($imageName);
        } catch (\Exception $e) {
            // Menangkap exception dan mendapatkan pesan error
            $errorMessage = $e->getMessage();

            // Lakukan tindakan yang sesuai dengan pesan error, seperti menampilkan pesan kepada pengguna atau mencatat error tersebut

            // Contoh: Menampilkan pesan error
            echo "Terjadi kesalahan: " . $errorMessage;
        }

        // dd('aman');

        return redirect('/');
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
    public function destroy($id)
    {
        //
    }

    public function kelola_galang_dana()
    {
        $waiting_list_programs = DB::select("SELECT * FROM programs where user_id = " . Auth::user()->id . ";");
        $is_exist_menunggu = false;
        $is_exist_disetujui = false;
        $is_exist_ditolak = false;

        foreach($waiting_list_programs as $program) {
            if ($program->status === 'menunggu') {
                $is_exist_menunggu = true;
            } else if($program->status === 'disetujui') {
                $is_exist_disetujui = true;
            } else if($program->status === 'ditolak') {
                $is_exist_ditolak =  true;
            }
        }
        // dd($waiting_list_programs);
        // dd($is_exist_disetujui, $is_exist_ditolak);
        return view('user.program.kelola_galang_dana', compact('waiting_list_programs', 'is_exist_menunggu', 'is_exist_disetujui', 'is_exist_ditolak'));
    }

    public function pilih_kategori_galang_dana(Request $request)
    {
        return view('user.program.pilih_kategori');
    }

    public function formatDateString($dateString)
    {
        $timestamp = strtotime($dateString);
        $formattedDate = date('Y-m-d', $timestamp);

        $date = new DateTime($formattedDate);
        $formattedDateString = $date->format('Y-m-d');

        return $formattedDateString;
    }

}
