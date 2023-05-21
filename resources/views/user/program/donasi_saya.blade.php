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

    <section class="bg-white pt-2 pb-4">
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
                            <div class="w-[90%] flex">
                                <div class="w-[35%] h-20 grid place-items-center">
                                    <img src="{{ asset($donasi->banner_img) }}" alt=""
                                        class="rounded object-cover object-center w-20 h-20">
                                </div>
                                <div class="flex flex-col h-full w-[70%] mx-2 justify-between">
                                    <p class="text-sm font-semibold">{{ substr($donasi->nama, 0, 30) }}...</p>
                                    <p class="text-xs">{{ date('d F Y', strtotime($donasi->created_at)) }} <span
                                            class="font-semibold">· @convert($donasi->amount)</span></p>
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

    <div class="bg-[#F7F7F7] h-2 w-full"></div>

    <section class="bg-white pt-2 mb-[56px]">
        <div id="doa_container" class="container" style="background-image: url('{{ asset('img/wave.svg') }}'); background-repeat: no-repeat; background-size: cover; background-position: right;">
            <div class="flex justify-between items-center mb-4">
                <span class="text-base font-semibold">Ingat Pernah Menulis Doa Ini?</span>
                {{-- <span class="text-sm font-semibold text-primer">Selengkapnya</span> --}}
            </div>
            @if ($donasis)
                <div class="flex flex-col bg-white gap-y-4">
                    <div class="h-fit min-w-[88%] border-2 rounded-lg shadow-md pt-3 px-4">
                        <!-- More button -->
                        <div class="flex justify-end text-base">
                            <button><i class="fa-solid fa-ellipsis"></i></button>
                        </div>

                        <!-- Profile pic, name, timestamp -->
                        <div class="flex w-full h-12 mb-4">
                            <div class="pr-4 h-full">
                                <img src="{{ asset('img/user_doa.avif') }}" alt="">
                            </div>
                            <div class="flex-col">
                                <p class="text-sm font-bold text-[#4A4A4A]">{{ Auth::user()->name }}</p>
                                <div class="text-[10px] font-normal"><span
                                        class="text-[#989898]">{{ substr($donasis[0]->nama, 0, 15) }}...</span>
                                    <span
                                        class="w-[4px] mx-1 h-[4px] inline-block bg-[#4A4A4A] rounded-full"></span><span
                                        class="text-[#6A6A6A]">{{ Carbon\Carbon::parse($donasis[0]->created_at)->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-20 pb-6">
                            <!-- Doa -->
                            <p class="text-sm font-normal">{{ substr($donasis[0]->doa, 0, 134) }}
                                <span class="text-[#989898]">Lihat selengkapnya</span>
                            </p>
                            <!-- Like doa -->
                            <p class="font-normal text-xs"><span class="font-bold hidden amin-toggle"
                                    data-doa-id="{{ $donasis[0]->doa_id }}">Kamu <span class="font-normal">dan
                                    </span></span><span class="font-bold">{{ $donasis[0]->like }} Orang</span>
                                <span class="hidden amin-toggle font-bold">lainnya </span>mengaminkan doa ini
                            </p>
                        </div>
                        <div class="flex justify-around py-4 border-t-2">
                            <!-- Like -->
                            <div class="flex items-center svg-like cursor-pointer" data-id="{{ $donasis[0]->doa_id }}">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" role="img" class="w-5">
                                    <path
                                        d="M8.687 4.121c1.03.228 1.895.754 2.633 1.5.226.228.474.435.68.623.25-.232.53-.487.806-.747 1.088-1.025 2.364-1.571 3.877-1.483 1.045.06 1.97.442 2.71 1.18 1.438 1.435 1.918 3.15 1.411 5.122-.26 1.008-.742 1.914-1.322 2.77-.906 1.336-2.018 2.49-3.207 3.574-1.146 1.045-2.367 1.998-3.616 2.916a.993.993 0 0 1-1.168.004l-2.11-1.514c-1.375-1.084-2.659-2.266-3.8-3.596-.747-.87-1.41-1.799-1.901-2.84-.36-.76-.608-1.551-.667-2.394-.08-1.151.22-2.202.856-3.162C4.971 4.415 6.74 3.692 8.687 4.121Z"
                                        fill="#989898" class="like-doa-icon"></path>
                                </svg>
                                <p class="text-xs ml-2 font-normal text-[#6A6A6A]">Aamiin</p>
                            </div>
                            <!-- Share -->
                            <div class="flex items-center">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path
                                        d="M17.5 10A3.5 3.5 0 1 0 14 6.5c0 .43-.203.86-.595 1.037L10.034 9.07c-.427.194-.924.052-1.283-.25a3.5 3.5 0 1 0-.2 5.517c.38-.275.885-.381 1.297-.156l3.585 1.955c.412.225.597.707.572 1.176a3.5 3.5 0 1 0 1.445-2.649c-.38.275-.886.381-1.298.156l-3.585-1.955c-.412-.225-.597-.707-.572-1.176.003-.062.005-.125.005-.188 0-.43.203-.86.595-1.037l3.371-1.533c.428-.194.924-.052 1.283.25.609.512 1.394.82 2.251.82Z"
                                        fill="#989898"></path>
                                </svg>
                                <p class="text-xs ml-2 font-normal text-[#6A6A6A]">Bagikan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-sm font-semibold text-[#4A4A4A] pb-4 mt-4">Ingin lihat doamu yang lain?<span
                        class="text-xs text-primer ml-4 font-normal">Selengkapnya</span></p>
            @else
                <div class="flex flex-col items-center mt-4 w-full">
                    <img src="{{ asset('img/doa-empty.jpg') }}" alt="" class="w-[60%]">
                    {{-- <p class="text-[#4A4A4A] font-semibold text-base mt-4 my-2">Tidak ada donasi ditemukan</p> --}}
                    <p class="text-[#989898] text-xs text-center tracking-wide">Kamu bisa menulis doa saat berdonasi.
                        Doa yang pernah kamu tulis akan ditampilkan secara acak di sini. Yuk, donasi sekarang.
                    </p>
                    <a href="/"
                        class="text-center text-primer border-2 border-primer rounded mt-4 py-2 px-4 hover:bg-primerhover hover:text-white hover:border-primerhover">
                        <p class="font-semibold">Donasi Sekarang</p>
                    </a>
                </div>
            @endif
        </div>
    </section>

    @include('layout.navbar')
</body>

</html>
