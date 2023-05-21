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

<body class="font-rubik">
    <section class="bg-primer relative h-36 flex flex-col w-full">
        <div class="container py-4">
            <p class="text-white font-semibold text-base tracking-wide">Donasi saya</p>
        </div>
        <div
            class="w-[94%] p-2 flex flex-col items-start justify-center h-3/4 absolute top-1/2 bg-white border-2 border-gray-200 self-center rounded-md">
            <p class="text-base text-[#4A4A4A] font-semibold">Gamas Namara Akbar</p>
            <p class="text-sm font-normal">Berbagi kebaikan di Beriarti sejak 10 Mar 2023</p>
            <div class="self-center w-full h-[1px] bg-gray-300 rounded-full mt-2 mb-2"></div>
            <div class="flex items-center">
                <img src="{{ asset('img/icons/donation.png') }}" alt="" class="w-6 h-6 mr-2">
                <p class=""><span class="font-semibold">1x</span> Berdonasi </p>
            </div>
        </div>
    </section>

    <div class="bg-white h-20"></div>
    <div class="bg-[#F7F7F7] h-2 w-full"></div>
    <section class="bg-white pt-2">
        <div class="container">
            <div class="flex justify-between items-center mb-4">
                <span class="text-base font-semibold">Lihat Riwayat Donasimu</span>
                <span class="text-sm font-semibold text-primer">Selengkapnya</span>
            </div>
            @if ($donasis)
                <div class="flex flex-col gap-y-4">
                    @foreach ($donasis as $donasi)
                        <div class="flex justify-between w-full rounded-md">
                            <!-- foto, judul, amount, dan tanggal -->
                            <div class="w-[70%] flex">
                                <div class="w-[30%] h-20 grid place-items-center">
                                    <img src="{{ asset($donasi->banner_img) }}" alt="" class="rounded object-cover object-center w-20 h-20">
                                </div>
                                <div class="flex flex-col h-full w-[70%] mx-2 justify-between">
                                    <p class="text-sm font-semibold">{{ substr($donasi->nama, 0, 30) }}...</p>
                                    <p class="text-xs">{{ date("d F Y", strtotime($donasi->created_at)) }} <span class="font-semibold">· @convert($donasi->amount)</span></p>
                                </div>
                            </div>
                            <!-- status -->
                            <div class="px-4 text-primer border border-primer rounded-full h-fit">
                                <p class="text-xs">Berhasil</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex flex-col items-center mt-4">
                    <img src="{{ asset('img/icons/empty_donasisaya.svg') }}" alt="">
                    <p class="text-[#4A4A4A] font-semibold text-base mt-4 my-2">Tidak ada donasi ditemukan</p>
                    <p class="text-[#989898] text-xs text-center">Kamu belum melakukan donasi
                    </p>
                    <a href="/" class="w-full text-center bg-primer rounded mt-4 py-2">
                        <p class="text-white font-semibold">Donasi Sekarang</p>
                    </a>
                </div>
            @endif
        </div>
    </section>


    @include('layout.navbar')
</body>

</html>
