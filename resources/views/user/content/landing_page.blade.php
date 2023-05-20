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
    <!-- Search Section Start -->
    <section class="bg-primer h-16 py-3 z-[100] fixed top-0 left-0 right-0 w-full">
        <div class="container h-full lg:max-w-lg">
            <div class="flex gap-x-2 items-center h-full">
                <!-- Logo -->
                <div class="grid w-11 place-items-center">
                    <img src="{{ asset('img/beriarti-white-notext.png') }}" alt="">
                </div>

                <!-- Search bar -->
                <div class="bg-secondary h-full text-white w-full rounded-full">
                    <div class="flex justify-between items-center h-full px-4">
                        <!-- Placeholder search bar -->
                        <p class=" font-normal text-xs">Bantu sesama, cari 'pengobatan'</p>

                        <!-- icon search -->
                        <div class="grid place-items-center">
                            <i class="fa fa-thin fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Search Section End -->

    <!-- Fast way Start -->
    <section class="bg-white pt-16 pb-2 lg:max-w-lg lg:mx-auto">
        <div class="container py-4">
            <h3 class="font-semibold text-lg mt-1 text-[#4A4A4A]">Ingin Menggalang Dana?</h3>
            <div class="flex flex-wrap mt-6 flex-row gap-2">
                <!-- Blue Button -->
                <a href="#"
                    class="w-full h-12 bg-primer rounded-full py-2 flex items-center justify-center hover:bg-primerhover">
                    <p class="font-bold text-base text-white">Galang Dana Sekarang</p>
                </a>
                <!-- White button-->
                <a href="#"
                    class="group w-full h-12 bg-white rounded-full py-2 flex items-center justify-center border border-primer text-primer hover:text-white hover:bg-primer">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="mr-2 inline w-[21px]">
                        <path
                            d="M5 13.286V7.028c-.197.028.183-.065 0 0a3.001 3.001 0 0 0-2 2.83v3.856c0 1.21.358 2.337.975 3.28.085.928-.096 1.814-.324 2.513-.23.704.223 1.489.942 1.309.764-.192 1.675-.596 2.433-1.434A5.99 5.99 0 0 0 9 19.714h2.857c1.36 0 2.56-.678 3.283-1.714.184-.264-.117.305 0 0H9.43C7.299 18 5 15.416 5 13.286Z"
                            class="fill-secondary group-hover:fill-white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.857 3.75A2.25 2.25 0 0 0 7.607 6v6.857a2.25 2.25 0 0 0 2.25 2.25H15c.56 0 1.098-.087 1.602-.249l.446-.142.324.337c.68.708 1.493 1.05 2.189 1.213a.184.184 0 0 0 .017.004.138.138 0 0 0 .016-.021.411.411 0 0 0 .025-.34c-.248-.732-.463-1.68-.413-2.705l.01-.212.12-.175c.577-.842.914-1.86.914-2.96V6A2.25 2.25 0 0 0 18 3.75H9.857Zm9.73 12.52h-.002.001ZM6.106 6a3.75 3.75 0 0 1 3.75-3.75H18A3.75 3.75 0 0 1 21.75 6v3.857c0 1.33-.385 2.572-1.05 3.618-.005.707.148 1.386.34 1.953.19.561.115 1.178-.192 1.644-.325.495-.923.82-1.628.655a5.945 5.945 0 0 1-2.598-1.316 6.763 6.763 0 0 1-1.622.196H9.857a3.75 3.75 0 0 1-3.75-3.75V6Z"
                            class="fill-secondary group-hover:fill-white"></path>
                        <path
                            d="M13.875 5.5c-.517 0-.977.102-1.376.308-.397.205-.706.47-.921.793-.216.326-.328.66-.328.995 0 .223.096.425.271.594.176.17.398.258.649.258.402 0 .7-.221.854-.61l.033-.093c.09-.255.199-.446.317-.566.088-.088.25-.14.501-.14.208 0 .363.052.48.154.11.096.157.199.157.331 0 .059-.013.11-.043.16a.906.906 0 0 1-.16.199l-.097.088c-.058.05-.129.112-.214.182l-.089.074c-.227.188-.409.352-.547.492a1.88 1.88 0 0 0-.374.553 1.817 1.817 0 0 0-.145.749c0 .274.086.504.266.667a.886.886 0 0 0 .609.227c.424 0 .723-.223.83-.615l.078-.313a.548.548 0 0 1 .054-.138.65.65 0 0 1 .09-.117c.04-.043.09-.092.153-.148l.4-.341c.197-.17.344-.299.442-.39a2.27 2.27 0 0 0 .43-.545c.133-.232.198-.498.198-.792 0-.372-.111-.72-.33-1.033a2.163 2.163 0 0 0-.902-.727 3.075 3.075 0 0 0-1.286-.256ZM13.063 11.875a1.01 1.01 0 0 1 .704-.268.99.99 0 0 1 .698.27.915.915 0 0 1 .294.684c0 .29-.107.537-.317.714a1.028 1.028 0 0 1-.675.245c-.256 0-.488-.082-.682-.24a.892.892 0 0 1-.323-.719.91.91 0 0 1 .301-.686Z"
                            class="fill-secondary group-hover:fill-white"></path>
                        <p class="font-bold text-base">Tanya Tentang Galang Dana</p>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Fast way End -->

    <!-- Slider Banner Start -->
    <section class="bg-white my-2 px-4 py-4 lg:max-w-lg lg:mx-auto">
        <div class="relative">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-44 md:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div id="carousel-item-1" class="hidden duration-700 ease-in-out">
                    <img src="{{ asset('img/slider/slider5.avif') }}"
                        class="block rounded-xl border absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div id="carousel-item-2" class="hidden duration-700 ease-in-out">
                    <img src="{{ asset('img/slider/slider1.avif') }}"
                        class="block rounded-xl border absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div id="carousel-item-3" class="hidden duration-700 ease-in-out">
                    <img src="{{ asset('img/slider/slider2.avif') }}"
                        class="block rounded-xl border absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="...">
                </div>
                <!-- Item 4 -->
                <div id="carousel-item-4" class="hidden duration-700 ease-in-out">
                    <img src="{{ asset('img/slider/slider3.avif') }}"
                        class="block rounded-xl border absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-4 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="true"
                    aria-label="Slide 1"></button>
                <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                    aria-label="Slide 2"></button>
                <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                    aria-label="Slide 3"></button>
                <button id="carousel-indicator-4" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                    aria-label="Slide 4"></button>
            </div>
        </div>
    </section>
    <!-- Slider Banner End -->

    <!-- Jenis Donasi Start -->
    <section class="bg-white my-2 pb-20 pt-4 px-5 lg:max-w-lg lg:mx-auto">
        <div class="container flex h-full justify-around gap-x-8">
            <div class="w-20 h-20 rounded-full">
                <img src="{{ asset('img/donasi-pic.avif') }}" alt="">
                <p class="text-center">Donasi</p>
            </div>
            <div class="w-20 h-20 rounded-full">
                <img src="{{ asset('img/zakat-pic.avif') }}" alt="" class="object-fill">
                <p class="text-center">Zakat</p>
            </div>
            <div class="w-20 h-20 rounded-full">
                <img src="{{ asset('img/galangdana-pic.avif') }}" alt="">
                <p class="text-center">Galang Dana</p>
            </div>
        </div>
    </section>
    <!-- Jenis Donasi End -->

    <!-- Program Spesial Start -->
    <section class="bg-white my-2 lg:max-w-lg lg:mx-auto">
        <div class="container py-4">
            <h3 class=" text-[#4A4A4A] font-semibold text-base mb-4">Program Spesial Beriarti</h3>
            <div class="flex gap-x-4 overflow-x-auto pb-4">
                @foreach ($program_specials as $program)
                    <div
                        class="min-w-[70%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="/detail/{{ $program->id }}">
                            <img class="h-[130px] w-full rounded-t object-cover"
                                src="{{ asset($program->banner_img) }}" alt="banner/{{ $program->nama }}" />
                        </a>
                        <a href="/detail/{{ $program->id }}" class="block py-2 px-2">
                            <div class="flex flex-col gap-y-2">
                                <p class="text-sm font-semibold">{{ substr($program->nama, 0, 25) }}...</p>
                                <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1 bg-gray-300">
                                    <div class="h-1 bg-primer param-width" data-id="{{ $program->id }}"
                                        data-dana="{{ $program->total_dana }}"
                                        data-target="{{ $program->target_dana }}"></div>
                                </div>
                                <div class="flex justify-between gap-y-1 mt-2">
                                    <span class="text-xs font-medium ">@convert($program->total_dana)</span>
                                    <span
                                        class="text-xs font-medium">{{ \Carbon\Carbon::parse($program->tanggal_mulai)->diffInDays(\Carbon\Carbon::parse($program->tanggal_berakhir)) }}
                                        hari lagi</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Program Spesial End -->

    <!-- Section Zakat Start -->
    <section class="my-2 lg:max-w-lg lg:mx-auto">
        <img src="{{ asset('img/zakat.avif') }}" alt="">
    </section>
    <!-- Section Zakat End -->

    <!-- Pilihan Beriarti Start -->
    <section class="bg-white my-2 lg:max-w-lg lg:mx-auto">
        <div class="container py-4">
            <div class="flex justify-between items-center mb-4">
                <p class="text-base font-semibold text-[#4A4A4A]">Pilihan Beriarti</p>
                <p class="text-sm text-secondary">Lihat Lainnya</p>
            </div>
            <div class="flex gap-x-4 overflow-x-auto pb-4">
                @foreach ($program_pilihans as $program)
                    <div
                        class="w-2/5 min-w-[40%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="/detail/{{ $program->id }}" class="">
                            <img class="h-[85px] w-full rounded-t object-cover"
                                src="{{ asset($program->banner_img) }}" alt="" class="w-8 h-8" />
                        </a>
                        <a href="/detail/{{ $program->id }}" class="block p-2">
                            <div class="flex flex-col gap-y-2">
                                <p class=" text-xs font-semibold">{{ substr($program->nama, 0, 25) }}...</p>
                                <div class="flex">
                                    <span
                                        class="font-normal text-[10px] mr-2">{{ substr($program->user_name, 0, 16) }}...</span>
                                    <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                        class="w-[31px] h-3">
                                </div>
                                <div class="bg-gray-300 overflow-hidden w-full rounded-full h-1">
                                    <div class="h-1 bg-primer param-width-pilihan" data-id="{{ $program->id }}"
                                        data-dana="{{ $program->total_dana }}"
                                        data-target="{{ $program->target_dana }}"></div>
                                </div>
                                <div class="flex flex-col gap-y-1 mt-2">
                                    <span class="text-[10px] font-normal ">Terkumpul</span>
                                    <span class="text-sm font-medium ">@convert($program->total_dana)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pilihan Beriarti End -->

    <!-- Sponsor Start -->
    <section class="my-2 lg:max-w-lg lg:mx-auto">
        <img src="{{ asset('img/sponsor.avif') }}" alt="">
    </section>
    <!-- Sponsor End -->

    <!-- Doa-doa Section Start -->
    <section class="bg-white my-2 lg:max-w-lg lg:mx-auto">
        <div class="container pt-4">
            <!-- Sub Title -->
            <div class="flex justify-between items-center mb-4">
                <p class="text-base font-semibold text-[#4A4A4A]">Doa-doa #OrangBaik</p>
                <p class="text-sm text-secondary">Lihat Lainnya</p>
            </div>

            <!-- Slider Wrapper -->
            <div class="flex overflow-x-auto gap-x-4">
                @php
                    use Carbon\Carbon;
                @endphp
                <!-- Slider Card Start -->

                <!-- Doa 1 -->
                @foreach ($doas as $doa)
                    <div class="h-72 min-w-[88%] border-2 rounded-lg mb-8 shadow-md py-3 px-4">

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
                                <p class="text-sm font-bold text-[#4A4A4A]">{{ $doa->user_name }}</p>
                                <div class="text-[10px] font-normal"><span
                                        class="text-[#989898]">{{ substr($doa->program_nama, 0, 15) }}...</span><span
                                        class="w-[4px] mx-1 h-[4px] inline-block bg-[#4A4A4A] rounded-full"></span><span
                                        class="text-[#6A6A6A]">{{ Carbon::parse($doa->created_at)->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-32 pb-6">
                            <!-- Doa -->
                            <p class="text-sm font-normal">{{ substr($doa->doa, 0, 134) }}
                                <span class="text-[#989898]">Lihat selengkapnya</span>
                            </p>
                            <!-- Like doa -->
                            <p class="font-normal text-xs"><span class="font-bold hidden amin-toggle"
                                    data-doa-id="{{ $doa->id }}">Kamu <span class="font-normal">dan
                                    </span></span><span class="font-bold">{{ $doa->like }} Orang</span>
                                <span class="hidden amin-toggle font-bold">lainnya </span>mengaminkan doa ini
                            </p>
                        </div>
                        <div class="flex justify-around py-4 border-t-2">
                            <!-- Like -->
                            <div class="flex items-center svg-like cursor-pointer" data-id="{{ $doa->id }}">
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
                @endforeach
            </div>
        </div>
    </section>
    <!-- Doa-doa Section End -->

    <!-- Pilih Kategori Favorit Start -->
    <section class="bg-white my-2 lg:max-w-lg lg:mx-auto">
        <div class="container pt-4 pb-[12px]">
            <p class="font-bold text-base text-[#4A4A4A] mb-4">Pilih Kategori Favoritmu</p>

            <!-- PIlihan Kategori -->
            <div class="flex w-full justify-evenly gap-x-3 mb-4">
                <!-- Kategori 1 -->
                <div class="flex flex-col gap-y-[10px] flex-1 items-center">
                    <div class="grid place-items-center w-12 border-2 border-primer p-2 rounded-xl">
                        <img src="{{ asset('img/icon-bencana.png') }}" alt="" class="">
                    </div>
                    <p class="text-xs font-normal text-center">Bencana Alam</p>
                </div>

                <!-- Balita -->
                <div class="flex flex-col gap-y-[10px] flex-1 items-center">
                    <div class="grid place-items-center w-12 border-2 border-slate-300 p-2 rounded-xl">
                        <img src="{{ asset('img/icon-balita.png') }}" alt="" class="">
                    </div>
                    <p class="text-xs font-normal text-center">Balita & Anak Sakit</p>
                </div>

                <!-- Medis -->
                <div class="flex flex-col gap-y-[10px] flex-1 items-center">
                    <div class="grid place-items-center w-12 border-2 border-slate-300 p-2 rounded-xl">
                        <img src="{{ asset('img/icon-medis.png') }}" alt="" class="">
                    </div>
                    <p class="text-xs font-normal text-center">Bantuan Medis & Kesehatan</p>
                </div>

                <!-- Lainnya -->
                <div class="flex flex-col gap-y-[10px] flex-1 items-center">
                    <div class="grid place-items-center w-12 border-2 border-slate-300 p-2 rounded-xl">
                        <img src="{{ asset('img/icon-list.png') }}" alt="" class="">
                    </div>
                    <p class="text-xs font-normal">Lainnya</p>
                </div>


            </div>

            <!-- Item 1 -->
            @foreach ($program_kategoris as $program)
                <a href="/detail/{{ $program->id }}" class="inline-block my-4">
                    <div class="flex w-full">
                        <div class="flex-1 mr-4 h-full">
                            <img src="{{ asset($program->banner_img) }}" alt="" class="rounded-lg">
                        </div>
                        <div class="flex-1 max-w-[45%]">
                            <div class="flex flex-col h-full justify-between">
                                <p class="text-xs font-semibold">{{ substr($program->nama, 0, 50) }}</p>
                                <div class="flex">
                                    <span
                                        class="font-normal text-[10px] mr-2">{{ substr($program->user_name, 0, 25) }}</span>
                                    <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                        class="w-[31px] h-3">
                                </div>
                                <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                    <div class="w-4/5 h-full bg-primer"></div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col">
                                        <p class="font-normal text-[10px]">Terkumpul</p>
                                        <p class="font-bold text-xs">@convert($program->total_dana)</p>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <p class="font-normal text-[10px]">Sisa hari</p>
                                        <p class="font-bold text-xs">
                                            {{ \Carbon\Carbon::parse($program->tanggal_mulai)->diffInDays(\Carbon\Carbon::parse($program->tanggal_berakhir)) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="w-full h-[1px] bg-slate-300 rounded"></div>
            @endforeach

            <div class="w-full flex items-center justify-center mt-4">
                <div class="w-40 p-[5px] bg bg-[#E7F5FF] rounded-full relative">
                    <p class="text-center text-xs text-[#10A8E5]">Lihat Semua</p>
                    <span class="absolute top-1/2 -translate-y-1/2 right-[15px]">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" role="img" class="w-3">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                                fill="#10A8E5"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Pilih Kategori Favorit End -->

    @include('layout.navbar')

    <!-- Footer Start -->
    <section class="bg-white my-2 pb-24 lg:max-w-lg lg:mx-auto">
        <div class="px-4 py-4">
            <p class="text-center text-lg font-semibold mb-4">Donasi di Beriarti Sekarang!</p>
            <p class="text-base font-normal text-[#989898] text-center">Tentang Beriarti <span
                    class="text-[#4A4A4A]">|</span> Syarat & Ketentuan <span class="text-[#4A4A4A]">|</span> Pusat
                Bantuan</p>
            <div class="flex justify-between my-7 px-[10%] text-center">
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-socmed-fb.svg') }}" alt="">
                </div>
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-socmed-twitter.svg') }}" alt="">
                </div>
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-socmed-instagram.svg') }}" alt="">
                </div>
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-socmed-youtube.svg') }}" alt="">
                </div>
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-socmed-tiktok.svg') }}" alt="">
                </div>
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-linkedin.svg') }}" alt="">
                </div>
                <div class="grid place-items-center w-8 h-8 rounded-full bg-[#E8E8E8]">
                    <img src="{{ asset('img/icon-techinasia.svg') }}" alt="">
                </div>
            </div>
            <hr class="my-7">
            <p class="text-base text-[#989898] text-center">Copyright © 2022 - 2023 Beriarti. All Rights Reserved</p>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Setup forajax csrf -->
    <script>
        // set csrf for ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    <script>
        const items = [{
                position: 0,
                el: document.getElementById('carousel-item-1')
            },
            {
                position: 1,
                el: document.getElementById('carousel-item-2')
            },
            {
                position: 2,
                el: document.getElementById('carousel-item-3')
            },
            {
                position: 3,
                el: document.getElementById('carousel-item-4')
            },
        ];

        const options = {
            activeItemPosition: 1,
            interval: 3000,

            indicators: {
                activeClasses: 'bg-[#639cd9] w-6 dark:bg-gray-800',
                inactiveClasses: 'bg-white dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
                items: [{
                        position: 0,
                        el: document.getElementById('carousel-indicator-1')
                    },
                    {
                        position: 1,
                        el: document.getElementById('carousel-indicator-2')
                    },
                    {
                        position: 2,
                        el: document.getElementById('carousel-indicator-3')
                    },
                    {
                        position: 3,
                        el: document.getElementById('carousel-indicator-4')
                    },
                ]
            },

            // callback functions
            onNext: () => {
                {{-- console.log('next slider item is shown'); --}}
            },
            onPrev: () => {
                {{-- console.log('previous slider item is shown'); --}}
            },
            onChange: () => {
                {{-- console.log('new slider item has been shown'); --}}
            }
        };

        const carousel = new Carousel(items, options);

        carousel.cycle();
    </script>
    <script src="{{ asset('js/doa-script.js') }}"></script>
    <script>
        var flashMessage = @json(session('success'));
        window.__FLASH__ = {
            message: flashMessage ?? '',
            type: 'success'
        };

        if (window.__FLASH__.message) {
            // Display the flash message to the user
            alert(window.__FLASH__.message);
        }
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
