<?php

namespace Database\Seeders;

use App\Models\Program;
use DateTime;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataProgram = [
            ["URGENT! 80% Hati Khanza Digerogoti Kanker Ganas", "MiaSyifa Cancer Care", "Rp 393.964.434", "34"],
            ["Bantu Ibu Buruh Cuci Keliling Sembuhkan Anaknya!!!", "LAZ DASI NTB", "Rp 46.604.272", "99"],
            ["Tuhan Yesus, Izinkan Ci Acacia Sembuh dari Kanker", "Tanwijaya gunawan", "Rp 1.423.614.638", "44"],
            ["Lumpuh Otak, Fauzan Diasuh Nenek Seorang Diri", "LAZ DASI NTB", "Rp 227.298.517", "25"],
            ["Tuhan , Selamatkan Ko Anderveen dari Kelumpuhan", "Elly Satjawidjaja", "Rp 351.457.527", "61"],
            ["Tanpa Ayah, Bayi Putri Berjuang Lawan Hidrosefalus", "SAPA Regional Tasikmalaya", "Rp 462.585.129", "23"],
            ["Setengah Badan Lumpuh, Ibu Harus Berjuang Sendiri", "Yayasan LombokCare", "Rp 12.797.653", "184"],
            ["Berjuang Jualan Cilok Meski Idap Tumor Perut", "Penghantar Perubahan Indonesia", "Rp 23.839.916", "146"],
            ["Kepala Membesar, Bantu Diandra Lawan Hidrosefalus", "Merawat Indonesia", "Rp 224.685.541", "3"],
            ["Bocah 7 Tahun Berjuang Lawan 3 Penyakit Sekaligus!", "LAZ DASI NTB", "Rp 680.249.434", "24"],
            ["13x kemoterapi, 2x operasi, Selamatkan Adzkia!", "MiaSyifa Cancer Care", "Rp 34.481.842", "23"],
            ["8thn Idap Kanker+Tumor Sekaligus & Tak Berobat", "Auro Mireqal Center", "Rp 74.741.725", "115"],
            ["Bantu Anak Guru Ngaji Sembuh Tumor Otak", "Yayasan Nurul Huda Gumelar", "Rp 126.975.454", "54"],
            ["Ko Cize Nantikan Mukjizat Yesus Tuk Bisa Sembuh", "Daniel Julius", "Rp 420.143.122", "37"],
            ["Gawat! Kanker Langka Ancam Nyawa Aira", "Annis hannafiah", "Rp 116.891.508", "59"],
            ["Tuhan, Emmanuel Butuh Transplantasi Sumsum Tulang", "Amelia Febiani", "Rp 403.509.137", "41"],
            ["Kisah Pilu Petani Jamur Rawat Anak Lumpuh Otak", "Yayasan LombokCare", "Rp 6.795.165", "250"],
            ["Sedekah Subuh, Bantu Anjani Sembuh Hidrosefalus", "Amal Bakti Dunia Islam", "Rp 45.347.074", "115"],
            ["Kepala Putri Terus Membesar Seolah Ingin Pecah!", "Yayasan UMMI", "Rp 40.327.092", "100"],
            ["Sakit! Hawari Jual Sapu Dengan Selang di Hidung", "Basecamp Solidaritas Indonesia", "Rp 167.389.095", "88"],
            ["Masih 4th Terancam Amputasi Akibat Kanker St. 4", "Hamdan aprian", "Rp 43.137.989", "61"],
            ["Idap 3 Penyakit, Al Sampai Tak Bisa Makan 1 Bulan", "Yayasan UMMI", "Rp 26.325.526", "100"],
            ["Selamatkan Septyani dari Kanker Ganasnya!", "Ni Kadek Septiani", "Rp 56.434.099", "24"],
            ["Anak Driver Ojol Sakit Tumor, Sering DIBULLY Teman", "Yayasan Sahabat Ayah Sarah", "Rp 74.198.337", "115"],
            ["Darurat ! Bantu Lansia & Yatim Dhuafa Dengan Zakat", "Yayasan FMR", "Rp 648.134.620", "314"],
            ["Zakat untuk Bantu Anak Yatim dan Dhuafa", "Yayasan Baitul Yataama Fadlan", "Rp 4.342.465.562", "314"],
            ["Infaq untuk pembangunan asrama panti asuhan", "YAYASAN KYAI AGENG SELO", "Rp 52.981.553", "44"],
            ["Rumah Zakat", "Rumah Zakat", "Rp 29.127.394.766", "1000"],
            ["Bantu selesaikan pembangunan masjid Darus salam", "Fera fauziyah", "Rp 48.830.778", "73"],
            ["Bantu Bangun Asrama dan Rumah Ibadah Santri", "Maftuhatunnisak", "Rp 23.272.324", "360"],
            ["Sedekah Berkah Panti Aduhan", "Zakat Yatim penghafal AlQuran", "Rp 25.942.648", "91"],
            ["Bantu kebutuhan pangan anak� di panti asuhan", "Yayasan ahbaabul mukhtar", "Rp 19.051.121", "99"],
            ["Amal jariah buat menghidupi Panti asuhan", "Ali Rosidi", "Rp 24.076.872", "77"],
            ["Sedekah Subuh untuk Santri Yayasan", "Mar'atus Sholikhah", "Rp 44.682.723", "512"],
            ["Bantu Beasiswa Mahasiswa Fakir Miskin Dhuafa", "MAYLATUR ROFIKOH", "Rp 11.215.755", "99"],
            ["Semangat Sedekah Subuh Tuk Bantu Pejuang Nafkah", "Yayasan Rute Langkah Amanah", "Rp 19.184.461", "33"],
            ["Lanjutkan pembangunan asrama panti asuhan", "Sedekah subuh santri Yatim dzuafa penghafal Alquran", "Rp 30.420.003", "72"],
            ["PEMBANGUNAN PANTI ASUHAN YATIM PIATU DAN DHUAFA", "BAZIS ANDA", "Rp 40.761.571", "64"],
            ["Sedekah jariah bantu yatim dhuafa", "Mukti Aris", "Rp 3.501.275", "109"],
            ["Bantu Biaya Pendidikan Yatim Fakir Miskin Dhuafa", "Sedekah subuh santri Yatim dzuafa penghafal Alquran", "Rp 33.875.140", "70"],
            ["Zakat untuk anak yatim dan penghapal AL QURA'N", "Yayasan At Taubah Islamiah Terpadu Garut", "Rp 174.299.699", "46"],
            ["Sedekah untuk anak Yatim Dhuafa", "Baitul Izzah", "Rp 22.184.437", "451"],
            ["Zakat Untuk Fakir Miskin Santri Yatim Tahfid Quran", "Yayasan Nurul Fahmi", "Rp 272.823.215", "24"],
            ["Sedekah Terbaik untuk Yatim Penghafal Qur'an", "Yayasan darul hidayah", "Rp 24.875.753", "84"],
            ["Bantu bahagiakan yatim dhuafa dengan asrama layak", "Zakat Yatim penghafal AlQuran", "Rp 11.047.157", "92"],
            ["Yatim Jadi Anak Jalanan tuk Bantu Ibu Berobat", "Yayasan Gerakan Mengajak Sedekah", "Rp 45.552.282", "146"],
            ["Berkorban Lumpuh Demi Obati Anak Infeksi Usus", "Yayasan Misykat Cahaya Ilahi", "Rp 46.059.712", "30"],
            ["PONDOK PESANTREN YATIM & DHU'AFA", "Yayasan Al-Amanah Nusantara", "Rp 2.779.003.588", "24"],
            ["Sakit Komplikasi, Sarena Harus Berobat di Jakarta!", "Milenial Babel Peduli", "Rp 56.997.922", "90"],
            ["BANTU WUJUDKAN SEKOLAH MTS/MA YATIM DHUAFA", "BAZIS ANDA", "Rp 8.212.814", "86"],
            ["Zakat Bantu Anak Yatim dan Dhuafa Penghafal Quran", "Yayasan Nurul Fahmi", "Rp 101.238.353", "45"],
            ["Bantu biaya oprasional Panti", "Masyuhdi", "Rp 32.403.344", "298"],
            ["Sedekah subuh tempat ibadah", "Mar'atus Sholikhah", "Rp 28.549.187", "817"],
            ["Anak Kuli Bangunan Tak Mampu Operasi 3 Penyakit", "Untuk Teman", "Rp 19.509.479", "115"],
            ["DARURAT! Ginjal Ko Koan Nyaris Tak Berfungsi", "Anggina Sari", "Rp 211.370.804", "48"],
            ["Tak Ada Masjid, Warga Shalat di Ruang Kelas Sempit", "BAZNAS Hub", "Rp 107.360.168", "16"],
            ["Sedekah Kebutuhan Harian Tuk Yatim Dhuafa", "Rumah Tahfidz Yatim Dhuafa", "Rp 5.180.550", "101"],
            ["ikut membangun tempat tinggal penghafal Al-Qur'an", "RIKO ADI SAPUTRO", "Rp 1.920.000", "102"],
            ["SEDEKAH BIAYA PENDIDIKAN YATIM DHUAFA TAHFIDZ", "YATIM DZUAFA PENGHAFAL ALQUR'AN", "Rp 1.205.000", "116"],
            ["Lawan Leukemia Akut Abizar Lumpuh & Kritis", "Teman Kecil", "Rp 300.601.038", "177"],
            ["Terpaksa Berhenti Kemo, Dipaksa Tahan Sakit Tumor", "Sajiwa Foundation", "Rp 500.995.764", "30"],
            ["Pahala tiada putus dengan Sedekah sumur air tities", "Infak dan sedekah panti asuhan", "Rp 38.469.512", "60"],
            ["Sedekah untuk gedung asrama putri", "Yayasan Darul Huda", "Rp 44.621.978", "78"],
            ["Sedekah Jumat Berbagi Berkah Untuk Dhuafa", "Yayasan Nurul Fahmi", "Rp 36.501.858", "177"],
            ["Bantu Biaya Bangun Asrama yg layak utk anak Panti", "Abu Hasan", "Rp 22.691.476", "421"],
            ["Bersama Wujudkan Perpustakaan Ramah Anak", "Yayasan Literasi Anak Indonesia", "Rp 64.932.673", "70"],
            ["Penyakit Otak & Gizi Buruk, Bawa Rania ke RS!", "Lembaga Cinta Kasih Makassar", "Rp 114.679.877", "95"],
            ["Urgent ! Bantu Lansia Yatim Dhuafa dengan Zakat", "Yayasan LTI Care", "Rp 103.960.321", "83"],
            ["Sedekah jariyah bantu yatim dhuafa", "MAYLATUR ROFIKOH", "Rp 4.933.678", "99"],
            ["50% Kaki Kiri Mefri Membusuk Tergilas Batu!", "Yayasan Kita Mitra Berbagi", "Rp 139.443.974", "85"],
            ["Bangun Masjid Untuk Yatim Dhuafa Penghafal Qur'an", "Yayasan darul hidayah", "Rp 47.105.704", "63"],
            ["sedekah subuh untuk 200 yatim dan dhuafa", "Dewi Masruroh", "Rp 31.372.229", "16"],
            ["Tabungan Akhirat:Bantu anak� di Yayasan SC smg", "Maftuhatunnisak", "Rp 9.404.358", "513"],
            ["Tuhan, Selamatkan Ko Sean dari 2 Penyakit Parahnya", "Suliyati", "Rp 325.922.547", "54"],
            ["Raih Pahala, Sedekah para penghafal Al-Qur'an", "Muhammad kholiq", "Rp 11.161.290", "68"],
            ["Butuh 200 Juta, Anak Ojol Harus Operasi di India", "Yayasan Gerakan Mengajak Sedekah", "Rp 92.894.638", "81"],
            ["Santunan untuk Panti asuhan yatim dhuafa", "muhammad sholeh", "Rp 5.970.000", "79"],
            ["Luka Bakar MASIH BASAH & PERLU BANTUAN MEDIS", "Kitabisa", "Rp 38.654.957", "54"],
            ["WUJUDKAN MIMPI ANAK NTT DAPAT SEKOLAH DENGAN AMAN", "Cakra Abhipraya Responsif", "Rp 173.882.939", "48"],
            ["Infaq untuk biaya spp murid anak lksa sarochaniyya", "Fathul alim", "Rp 19.365.901", "64"],
            ["Bibir Digerogoti Tumor, Senyum Javelin Lenyap!", "Yayasan Danielle", "Rp 18.476.619", "115"],
            ["Bantu Tiffany Lawan Infeksi Akut & Leukimia langka", "Stevani martio", "Rp 371.233.848", "101"],
            ["Zakat untuk bantu panti asuhan", "Yayasan Darul Huda", "Rp 68.510.085", "35"],
            ["12 Jam Mengamen Demi Bawa Anak Hidrosefalus ke RS", "Untuk Teman", "Rp 108.388.329", "86"],
            ["Kanker Darah Menyerang, Sean Butuh Bantuan!", "Rachel vilie", "Rp 86.773.108", "72"],
            ["Zakat Untuk Santri Yatim Fakir Miskin dan Dhuafa", "Yayasan darul hidayah", "Rp 44.942.247", "113"],
            ["Penyakit Kulit Langka, Cindi Ingin Punya Teman", "Penunggang Kuda Kebaikan", "Rp 201.763.426", "8"],
            ["Bantu Beryl cegah stunting karena penyakitnya", "Novia indah", "Rp 66.393.027", "42"],
            ["Bantu Lansia Fakir Miskin & Dhuafa dengan Zakat", "Yayasan Baitur Ridwan Al Islami", "Rp 116.045.428", "79"],
            ["SEDEKAH KITA BANTU YATIM", "YAYASAN YATIM MADANI", "Rp 2.146.000", "110"],
            ["LADANG JARIYAH SEDIAKAN AL-QURAN UNTUK SANTRI", "Yayasan LTI Care", "Rp 49.740.463", "32"],
            ["Zakat Bantu Jompo Fakir Miskin Santri Yatim Dhuafa", "Yayasan FMR", "Rp 38.748.438", "352"],
            ["MARI KITA BANTU HAPUS AIR MATA ANAK YATIM PIATU", "Yayasan Al-Amanah Nusantara", "Rp 1.668.316.269", "24"],
            ["Sedekah Bantu Penghafal Al Quran Al Yamin Kudus", "Yayasan Islam Al Yamin Kudus", "Rp 13.414.832", "60"],
            ["Bantu Pembangunan Masjid Panti asuhan tahfidz", "Yayasan ahbaabul mukhtar", "Rp 58.808.555", "42"],
            ["Bantu Fakir miskin,Yatim Penghafal Qur'an dg Zakat", "Yayasan ahbaabul mukhtar", "Rp 54.988.499", "99"],
            ["Tulang Ekor Menonjol, Bayi Ojol Terancam Lumpuh!", "Penghantar Perubahan Indonesia", "Rp 121.515.783", "24"],
            ["Sedekah beras dan sembakau untuk panti asuhan", "Infak dan sedekah panti asuhan", "Rp 982.000", "118"],
            ["Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim", "Yuk Peduli", "Rp 1.152.852.535", "999"],

        ];

        $status = ['approved', 'rejected', 'waiting'];

        $counter = 1;
        foreach ($dataProgram as $program) {
            $today = new DateTime();
            $todayStr = $today->format('Y-m-d');

						$numberOfDays = intval($program[3]);
            $futureDate = $today->modify("+{$numberOfDays} days");
            $futureDateStr = $futureDate->format('Y-m-d');

            $strTotalDana = $program[2];
            $totalDana = intval(str_replace(array("Rp ", "."), "", $strTotalDana));
            $targetDana = rand($totalDana, $totalDana * 20);
            $pathToImage = '/public/img/program_banners/' . $counter . '.jpeg';
            $counter++;
            $statusValue = rand(0, 2);

            Program::create([
                'nama' => $program[0],
                'status' => $status[$statusValue],
                'total_dana' => $totalDana,
                'target_dana' => $targetDana,
                'banner_img' => $pathToImage,
                'tanggal_mulai' => $todayStr,
                'tanggal_berakhir' => $futureDateStr,
            ]);
        }

    }
}
