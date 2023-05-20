<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/beriarti-logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Beriarti - Memberikan Harapan dan Mengubah Dunia dengan Aksi Nyata</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F7F7F7] font-rubik">
    <a href="{{ url()->previous() }}"
        class="w-10 h-10 rounded-full bg-white shadow-lg grid place-items-center fixed top-4 left-4">
        <img src="{{ asset('img/icons/navigation/left-arrow.svg') }}" alt="">
    </a>
    <div class="bg-gradient-to-b from-white to-[#00aeef]/30 inset-2 bg-opacity-10 p-4">
        <div class="text-center my-4 px-8">
            <h3 class="text-xl font-bold text-[#4A4A4A]">Galang dana untuk semua yang membutuhkan!</h3>
        </div>
        <p class="text-sm px-8 text-[#4A4A4A] mb-8 text-center">Di Kitabisa ada jutaan #OrangBaik yang berdonasi ke
            segala jenis galang dana tiap harinya.</p>
        @auth
            <a href="{{ route('galangdana.kelola') }}" class="text-white block px-8 mb-8">
                <div class="w-full bg-[#00aeef] text-center py-3 px-4 rounded-md font-bold">
                    <p>Galang Dana Sekarang!</p>
                </div>
            </a>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="text-white block px-8 mb-8">
                <div class="w-full bg-[#00aeef] text-center py-3 px-4 rounded-md font-bold">
                    <p>Galang Dana Sekarang!</p>
                </div>
            </a>
        @endguest
    </div>

    <!-- Section tata cara galang dana -->
    <div class="px-8 py-6">
        <h3 class="text-xl font-bold mb-10 text-[#4A4A4A]">
            Cara Galang Dana di Beriarti
        </h3>

        <!-- Step Galang Dana -->

        <!-- Step 1 -->
        <div class="flex flex-row gap-x-4 text-sm mb-4">
            <div
                class="flex flex-col border justify-center items-center w-10 h-10 rounded-full bg-[#10A8E5] text-white font-semibold">
                <p>1</p>
            </div>
            <div class="px-4 pt-5 pb-4 w-10/12 bg-white shadow-lg">
                <img src="{{ asset('img/icons/icon-jenis-galang-dana.svg') }}" alt="" class="mb-4">
                <p class="mb-2 font-bold text-[#4A4A4A]">Pilih jenis galang dana</p>
                <p class="text-[#4A4A4A]">
                    Galang dana di Beriarti ada 2 jenis, yaitu galang dana kebutuhan medis dan non-medis.
                </p>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="flex flex-row gap-x-4 text-sm mb-4">
            <div
                class="flex flex-col border justify-center items-center w-10 h-10 rounded-full bg-[#10A8E5] text-white font-semibold">
                <p>2</p>
            </div>
            <div class="px-4 pt-5 pb-4 w-10/12 bg-white shadow-lg">
                <img src="{{ asset('img/icons/icon-isi-form.svg') }}" alt="" class="mb-4">
                <p class="mb-2 font-bold text-[#4A4A4A]">Isi form pembuatan galang dana</p>
                <p class="text-[#4A4A4A]">
                    Isi form secara lengkap dengan mengikuti instruksi yang diberikan.
                </p>
            </div>
        </div>
        <!-- Step 3 -->
        <div class="flex flex-row gap-x-4 text-sm mb-8">
            <div
                class="flex flex-col border justify-center items-center w-10 h-10 rounded-full bg-[#10A8E5] text-white font-semibold">
                <p>3</p>
            </div>
            <div class="px-4 pt-5 pb-4 w-10/12 bg-white shadow-lg">
                <img src="{{ asset('img/icons/icon-verifikasi-galang-dana.svg') }}" alt="" class="mb-4">
                <p class="mb-2 font-bold text-[#4A4A4A]">Verifikasi galang dana kamu</p>
                <p class="text-[#4A4A4A]">
                    Lakukan verifikasi identitas dan dokumen medis (khusus galang dana medis)
                </p>
            </div>
        </div>

    </div>

    <div class="bg-[#10A8E5] px-6 py-6">
        <h3 class="text-xl mb-4 font-bold text-center text-white">Sudah tahu tata caranya, 'kan?</h3>
        <p class="mb-6 font-semibold text-sm text-center text-white">Yuk, buat galang dana kamu dan dapatkan donasi dari
            jutaan #OrangBaik di Beriarti!</p>
        @auth
            <a href="{{ route('galangdana.kelola') }}" class="block text-[#10A8E5] mb-8">
                <div class="w-full bg-white text-center py-3 px-4 rounded-md font-bold">
                    <p>Galang Dana Sekarang!</p>
                </div>
            </a>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="block text-[#10A8E5] mb-8">
                <div class="w-full bg-white text-center py-3 px-4 rounded-md font-bold">
                    <p>Galang Dana Sekarang!</p>
                </div>
            </a>
        @endguest
    </div>

</body>

</html>
