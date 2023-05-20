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
    <section class="bg-gradient-to-b from-black/50 to-transparent h-16 py-3 z-[100] fixed top-0 left-0 right-0 w-full">
        <a href="{{ url()->previous() }}" class="container h-full lg:max-w-lg flex items-center">
            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                role="img" class="w-5">
                <path
                    d="M12.86 5.076a1.216 1.216 0 1 0-1.72-1.72L3.356 11.14a1.216 1.216 0 0 0 0 1.72l7.784 7.784a1.216 1.216 0 0 0 1.72-1.72l-5.708-5.708h12.632a1.216 1.216 0 1 0 0-2.432H7.152l5.708-5.708Z"
                    fill="#FEFEFE"></path>
            </svg>
        </a>
    </section>

    <div>
        <img src="{{ asset($banner) }}" alt="" class="h-auto max-h-[270px] w-full">
    </div>
    <!-- Informasi umum program Section -->
    <section class="bg-white pt-3 px-4 pb-4">
        <h4 class="text-[#4A4A4A] font-bold text-lg mb-3">{{ $nama }}</h4>
        <span class="text-primer text-base font-semibold mb-[1px]">@convert($total_dana)</span>
        <div class="flex justify-between mb-3">
            <span class="text-[#4A4A4A] text-xs font-normal">Terkumpul dari <span
                    class="font-semibold">@convert($target_dana)</span></span>
            <span
                class="text-xs font-normal">{{ \Carbon\Carbon::parse($tanggal_mulai)->diffInDays(\Carbon\Carbon::parse($tanggal_berakhir)) }}
                hari</span>
        </div>
        <div class="bg-gray-400 overflow-hidden w-full rounded-full h-1">
            <div class="h-1 bg-primer param-width" data-dana="{{ $total_dana }}" data-target="{{ $target_dana }}">
            </div>
        </div>
        <div class="mt-4 grid grid-cols-3 text-sm">
            <button>
                <div class="flex flex-col items-center">
                    <div class="flex mb-[6px]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" role="img">
                            <path
                                d="M8.687 4.121c1.03.228 1.895.754 2.633 1.5.226.228.474.435.68.623.25-.232.53-.487.806-.747 1.088-1.025 2.364-1.571 3.877-1.483 1.045.06 1.97.442 2.71 1.18 1.438 1.435 1.918 3.15 1.411 5.122-.26 1.008-.742 1.914-1.322 2.77-.906 1.336-2.018 2.49-3.207 3.574-1.146 1.045-2.367 1.998-3.616 2.916a.993.993 0 0 1-1.168.004l-2.11-1.514c-1.375-1.084-2.659-2.266-3.8-3.596-.747-.87-1.41-1.799-1.901-2.84-.36-.76-.608-1.551-.667-2.394-.08-1.151.22-2.202.856-3.162C4.971 4.415 6.74 3.692 8.687 4.121Z"
                                fill="#10A8E5"></path>
                        </svg>
                        <span class="text-sm font-semibold text-[#4A4A4A] ml-2">{{ rand(100, 200) }}</span>
                    </div>
                    <span class="text-xs text-[#4A4A4A]">Donasi</span>
                </div>
            </button>
            <button>
                <div class="flex flex-col items-center border-l border-r">
                    <div class="flex mb-[6px]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" role="img">
                            <path
                                d="M17.354 21H18a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3h-.646A4.482 4.482 0 0 1 18.5 6v12a4.484 4.484 0 0 1-1.146 3Z"
                                fill="#10A8E5"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.25 3a.75.75 0 0 1 .75-.75h3A3.75 3.75 0 0 1 17.75 6v12A3.75 3.75 0 0 1 14 21.75H6A3.75 3.75 0 0 1 2.25 18v-7a.75.75 0 0 1 1.5 0v7A2.25 2.25 0 0 0 6 20.25h8A2.25 2.25 0 0 0 16.25 18V6A2.25 2.25 0 0 0 14 3.75h-3a.75.75 0 0 1-.75-.75Z"
                                fill="#6A6A6A"></path>
                            <path
                                d="M9.5 15.5h2.75a.75.75 0 0 0 0-1.5H9.5a.75.75 0 0 0 0 1.5ZM14.25 18.5H9.5a.75.75 0 0 1 0-1.5h4.75a.75.75 0 0 1 0 1.5ZM5.75 15.5h.5a.75.75 0 0 0 0-1.5h-.5a.75.75 0 0 0 0 1.5ZM7 17.75a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1 0-1.5h.5a.75.75 0 0 1 .75.75Z"
                                fill="#6A6A6A"></path>
                            <path d="M6 9H3l6-6v3a3 3 0 0 1-3 3Z" fill="#10A8E5"></path>
                        </svg>
                    </div>
                    <span class="text-xs text-[#4A4A4A]">Kabar Terbaru</span>
                </div>
            </button>
            <button>
                <div class="flex flex-col items-center">
                    <div class="flex mb-[6px]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" role="img" class="mt-0.5">
                            <path
                                d="M21 13.65a1 1 0 1 0-2 0v2a2 2 0 0 1-2 2h-5.5l.6-.45a1 1 0 1 0-1.2-1.6l-3 2.25a1 1 0 0 0 0 1.6l3 2.25a1 1 0 0 0 1.2-1.6l-.6-.45H17a4 4 0 0 0 4-4v-2Z"
                                fill="#10A8E5"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5 3.75A2.25 2.25 0 0 0 2.75 6v6A2.25 2.25 0 0 0 5 14.25h2.5a.75.75 0 0 1 0 1.5H5A3.75 3.75 0 0 1 1.25 12V6A3.75 3.75 0 0 1 5 2.25h14A3.75 3.75 0 0 1 22.75 6v6a.75.75 0 0 1-1.5 0V6A2.25 2.25 0 0 0 19 3.75H5ZM13.75 15a.75.75 0 0 1 .75-.75H17a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Z"
                                fill="#6A6A6A"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                fill="#6A6A6A"></path>
                        </svg>
                    </div>
                    <span class="text-xs text-[#4A4A4A]">Pencairan Dana</span>
                </div>
            </button>
        </div>
    </section>

    <!-- Penggalang dana Section -->
    <section class="bg-white mt-2">
        <div class="container py-4">
            <p class="text-base font-bold text-[#4A4A4A] mb-[10px]">Informasi Penggalangan Dana</p>

            <div class="mb-2 rounded border px-3 pt-3 pb-4">
                <h3 class="mb-[14px] text-[#4A4A4A] text-sm font-semibold">Penggalang Dana</h3>
                <div class="flex">
                    <div class="mr-3 w-[50px] h-[50px]">
                        <img src="{{ asset('img/user_profile/pd-pic.avif') }}" alt=""
                            class="w-full h-full rounded-full object-cover object-center">
                    </div>
                    <div class="ml-3">
                        <div class="flex items-center gap-x-2">
                            <span class="font-bold text-sm text-[#4A4A4A]">{{ $nama_penggalang }}</span>
                            <img src="{{ asset('img/verified_icon-org.svg') }}" alt="" height="26"
                                class="w-[31px] h-3">
                        </div>
                        <p class="text-xs font-normal text-[#4A4A4A] mt-2">Identitas lembaga terverifikasi</p>
                    </div>
                </div>
            </div>

            <div class="mb-2 rounded border px-4 py-3">
                <div class="flex justify-between">
                    <div>
                        <div class="flex">
                            <div class="mr-2 flex items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" role="img" class="mr-2">
                                    <path
                                        d="M17.354 21H18a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3h-.646A4.482 4.482 0 0 1 18.5 6v12a4.484 4.484 0 0 1-1.146 3ZM9.214 6.714a.714.714 0 0 0-1.428 0v1.072H6.714a.714.714 0 0 0 0 1.428h1.072v1.072a.714.714 0 1 0 1.428 0V9.214h1.072a.714.714 0 1 0 0-1.428H9.214V6.714Z"
                                        fill="#10A8E5"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6 3.75A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25h8A2.25 2.25 0 0 0 16.25 18V6A2.25 2.25 0 0 0 14 3.75H6ZM2.25 6A3.75 3.75 0 0 1 6 2.25h8A3.75 3.75 0 0 1 17.75 6v12A3.75 3.75 0 0 1 14 21.75H6A3.75 3.75 0 0 1 2.25 18V6Z"
                                        fill="#6A6A6A"></path>
                                    <path
                                        d="M6.75 14a.75.75 0 0 0 0 1.5h5a.75.75 0 0 0 0-1.5h-5ZM6.75 17a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5h-7.5Z"
                                        fill="#6A6A6A"></path>
                                </svg>
                                <span class="text-[#4A4A4A] font-semibold text-sm">Data pasien & Info penerima
                                    dana</span>
                            </div>
                        </div>
                        <div class="ml-8 mt-2">
                            <div class="flex">
                                <span class="text-[#6A6A6A] text-xs">Terverifikasi</span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" role="img" class="ml-2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Zm5.155-14.111c.736.552.885 1.597.333 2.333l-4.778 6a1.667 1.667 0 0 1-2.512.179l-2.71-2.845a1.667 1.667 0 1 1 2.357-2.357l1.352 1.486 3.625-4.463a1.667 1.667 0 0 1 2.333-.333Z"
                                        fill="#89D473"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="mt-1.5">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#6A6A6A"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white mt-2 pb-4 relative">
        <div class="container">
            <button class="w-full py-4">
                <div class="flex justify-between items-center mb-4 w-full">
                    <div class="">
                        <p class="text-base font-bold text-[#4A4A4A]">Cerita Penggalangan Dana</p>
                        <p class="text-start text-xs text-[#4A4A4A] mt-2">
                            {{ date('d M Y', strtotime($tanggal_mulai)) }}</p>
                    </div>
                    <div>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" role="img">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                                fill="#6A6A6A"></path>
                        </svg>
                    </div>
                </div>
            </button>

            <!-- Cerita -->
            <div class="max-h-72 overflow-hidden">{{ $deskripsi }}</div>

            <div class="mt-3">
                <p class="text-sm text-primer">Baca Selengkapnya</p>
            </div>
        </div>
    </section>

    <section class="bg-white mt-2 pb-16">
        <div class="container">
            <button class="flex w-full justify-between border-b py-4">
                <span class="text-[#4A4A4A] text-base font-bold">Kabar Terbaru</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" role="img" class="mt-1.5">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                        fill="#6A6A6A"></path>
                </svg>
            </button>
            <button class="flex w-full justify-between border-b py-4">
                <span class="text-[#4A4A4A] text-base font-bold">Pencairan Dana</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" role="img" class="mt-1.5">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                        fill="#6A6A6A"></path>
                </svg>
            </button>
            <button class="flex w-full justify-between border-b py-4">
                <span class="text-[#4A4A4A] text-base font-bold">Fundraiser</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" role="img" class="mt-1.5">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                        fill="#6A6A6A"></path>
                </svg>
            </button>
            <button class="flex w-full justify-between py-4">
                <div class="flex items-center">
                    <span class="text-[#4A4A4A] text-base font-bold">Donasi</span>
                    <div class="rounded-full bg-[#E6F5Fb] ml-4 px-3 py-[2px]"><span
                            class="text-primer font-bold text-xs">{{ rand(300, 1000) }}</span></div>
                </div>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" role="img" class="mt-1.5">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                        fill="#6A6A6A"></path>
                </svg>
            </button>
        </div>
        <div class="container bg-white">
            <div class="mb-2 flex rounded bg-[#FAFAFA] p-4">
                <div class="rounded-full bg-[#F3F3F3] w-[50px] h-[50px]">
                    <img src="{{ asset('img/user_doa.avif') }}" alt="">
                </div>
                <div class="flex flex-1 ml-5 flex-col text-[#4A4A4A]">
                    <span class="text-sm font-bold">Orang Baik</span>
                    <span class="text-sm">Berdonasi sebesar <span class="font-bold">@convert(rand(15000, 100000))</span></span>
                    <span class="text-[10px]">{{ rand(5, 12) }} menit yang lalu</span>
                </div>
            </div>
            <div class="mb-2 flex rounded bg-[#FAFAFA] p-4">
                <div class="rounded-full bg-[#F3F3F3] w-[50px] h-[50px]">
                    <img src="{{ asset('img/user_doa.avif') }}" alt="">
                </div>
                <div class="flex flex-1 ml-5 flex-col text-[#4A4A4A]">
                    <span class="text-sm font-bold">Orang Baik</span>
                    <span class="text-sm">Berdonasi sebesar <span class="font-bold">@convert(rand(15000, 100000))</span></span>
                    <span class="text-[10px]">{{ rand(5, 12) }} menit yang lalu</span>
                </div>
            </div>
            <div class="mb-2 flex rounded bg-[#FAFAFA] p-4">
                <div class="rounded-full bg-[#F3F3F3] w-[50px] h-[50px]">
                    <img src="{{ asset('img/user_doa.avif') }}" alt="">
                </div>
                <div class="flex flex-1 ml-5 flex-col text-[#4A4A4A]">
                    <span class="text-sm font-bold">Orang Baik</span>
                    <span class="text-sm">Berdonasi sebesar <span class="font-bold">@convert(rand(15000, 100000))</span></span>
                    <span class="text-[10px]">{{ rand(5, 12) }} menit yang lalu</span>
                </div>
            </div>
        </div>
    </section>

    <nav class="bg-[#F7F7F7] fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full lg:max-w-lg lg:mx-auto pt-2">
        {{-- <div class="container grid grid-cols-4 gap-x-1 font-semibold items-center h-full text-xs">

					<!-- Home Navbar -->
					<a href="/" class="flex flex-row flex-wrap items-center justify-center">
							<img src="{{ asset(Request::is('/') ? 'img/icons/navigation/home_navbar_active.svg' : 'img/icons/navigation/home-navbar.svg') }}"
									alt="" class="w-8">
							<p class="w-full text-center text-[10px] {{ Request::is('/') ? 'text-primer' : 'text-[#A8A8A8]' }}">
									Donasi</p>
					</a>

					<!-- Galang Dana Navbar -->
					<div class="flex flex-col flex-wrap items-center justify-center">
							<img src="{{ asset('img/icons/navigation/galang-navbar.svg') }}" alt="" class="w-8">
							<p class="text-center text-[10px] text-[#A8A8A8]">Galang Dana</p>
					</div>

					<!-- Donasi Navbar -->
					<div class="flex flex-col flex-wrap items-center justify-center">
							<img src="{{ asset('img/icons/navigation/donasi-navbar.svg') }}" alt="" class="w-8">
							<p class="text-[10px] text-[#A8A8A8]">Donasi Saya</p>
					</div>
					<!-- Account Navbar -->
					<a href="/user" class="flex flex-row flex-wrap items-center justify-center">
							<img src="{{ asset(Request::is('user') ? 'img/icons/navigation/account_navbar_active.svg' : 'img/icons/navigation/account-navbar.svg') }}"
									alt="" class="w-8">
							<p class="w-full text-center text-[10px] {{ Request::is('/user') ? 'text-primer' : 'text-[#A8A8A8]' }}">
									Akun</p>
					</a>
			</div> --}}
        <div class="container">
            <div class="flex gap-2">
                <a href="#"
                    class="group bg-white rounded-md transition duration-300 py-2 px-6 flex items-center justify-center border border-primer text-primer">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="mr-2 w-4 group-hover:fill-white">
                        <path
                            d="M17.5 10A3.5 3.5 0 1 0 14 6.5c0 .43-.203.86-.595 1.037L10.034 9.07c-.427.194-.924.052-1.283-.25a3.5 3.5 0 1 0-.2 5.517c.38-.275.885-.381 1.297-.156l3.585 1.955c.412.225.597.707.572 1.176a3.5 3.5 0 1 0 1.445-2.649c-.38.275-.886.381-1.298.156l-3.585-1.955c-.412-.225-.597-.707-.572-1.176.003-.062.005-.125.005-.188 0-.43.203-.86.595-1.037l3.371-1.533c.428-.194.924-.052 1.283.25.609.512 1.394.82 2.251.82Z"
                            fill="#639cd9"></path>
                    </svg>
                    <p class="font-bold text-sm text-primer">Bagikan</p>
                </a>
                @auth
                    <button onclick="window.location.href='/amount/{{ $id }}/{{ Auth::id() }}'"
                        class="bg-[#CB1552] text-white hover:bg-[#a60e41] font-bold text-base w-full rounded-md">Donasi
                        Sekarang</button>
                @endauth
                @guest
                    <button onclick="window.location.href='/login'"
                        class="bg-[#CB1552] text-white hover:bg-[#a60e41] font-bold text-base w-full rounded-md">Donasi
                        Sekarang</button>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Ajax Setup CSRF -->
    <script>
        // set csrf for ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        let html = $(".param-width");

        [...html].forEach(e => {
            let total_dana = $(e).data('dana')
            let target_dana = $(e).data('target')
            let percent = parseInt(total_dana / target_dana * 100)
            $(e).width(percent + '%');
        })

        let html_pilihan = $(".param-width-pilihan");

        [...html_pilihan].forEach(e => {
            let total_dana = $(e).data('dana')
            let target_dana = $(e).data('target')
            let percent = parseInt(total_dana / target_dana * 100)
            $(e).width(percent + '%');
        })
    </script>
</body>

</html>
