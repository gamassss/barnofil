<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F7F7F7] font-rubik">
    <!-- Search Section Start -->
    <section class="bg-[#00AEEF] h-16 py-3 z-[100] fixed top-0 w-full">
        <div class="container h-full">
            <div class="flex gap-x-2 items-center h-full">
                <!-- Logo -->
                <div class="grid w-11 place-items-center">
                    <img src="{{ asset('img/logo-kitabisa.png') }}" alt="">
                </div>

                <!-- Search bar -->
                <div class="bg-[#1BBAF5] h-full text-white w-full rounded-full">
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
    <section class="bg-white pt-16 pb-2">
        <div class="container py-4">
            <h3 class="font-semibold text-lg mt-1">Ingin Menggalang Dana?</h3>
            <div class="flex flex-wrap mt-6 flex-row gap-2">
                <!-- Blue Button -->
                <div
                    class="w-full h-12 bg-[#00aeef] rounded-full py-2 flex items-center justify-center hover:bg-[#0291c6]">
                    <p class="font-bold text-base text-white">Galang Dana Sekarang</p>
                </div>
                <!-- White button-->
                <div
                    class="group w-full h-12 bg-white rounded-full py-2 flex items-center justify-center border border-[#00aeef] text-[#00aeef] hover:text-white hover:bg-[#00AEEF]">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="mr-2 inline w-[21px]">
                        <path
                            d="M5 13.286V7.028c-.197.028.183-.065 0 0a3.001 3.001 0 0 0-2 2.83v3.856c0 1.21.358 2.337.975 3.28.085.928-.096 1.814-.324 2.513-.23.704.223 1.489.942 1.309.764-.192 1.675-.596 2.433-1.434A5.99 5.99 0 0 0 9 19.714h2.857c1.36 0 2.56-.678 3.283-1.714.184-.264-.117.305 0 0H9.43C7.299 18 5 15.416 5 13.286Z"
                            class="fill-[#10A8E5] group-hover:fill-white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.857 3.75A2.25 2.25 0 0 0 7.607 6v6.857a2.25 2.25 0 0 0 2.25 2.25H15c.56 0 1.098-.087 1.602-.249l.446-.142.324.337c.68.708 1.493 1.05 2.189 1.213a.184.184 0 0 0 .017.004.138.138 0 0 0 .016-.021.411.411 0 0 0 .025-.34c-.248-.732-.463-1.68-.413-2.705l.01-.212.12-.175c.577-.842.914-1.86.914-2.96V6A2.25 2.25 0 0 0 18 3.75H9.857Zm9.73 12.52h-.002.001ZM6.106 6a3.75 3.75 0 0 1 3.75-3.75H18A3.75 3.75 0 0 1 21.75 6v3.857c0 1.33-.385 2.572-1.05 3.618-.005.707.148 1.386.34 1.953.19.561.115 1.178-.192 1.644-.325.495-.923.82-1.628.655a5.945 5.945 0 0 1-2.598-1.316 6.763 6.763 0 0 1-1.622.196H9.857a3.75 3.75 0 0 1-3.75-3.75V6Z"
                            class="fill-[#10A8E5] group-hover:fill-white"></path>
                        <path
                            d="M13.875 5.5c-.517 0-.977.102-1.376.308-.397.205-.706.47-.921.793-.216.326-.328.66-.328.995 0 .223.096.425.271.594.176.17.398.258.649.258.402 0 .7-.221.854-.61l.033-.093c.09-.255.199-.446.317-.566.088-.088.25-.14.501-.14.208 0 .363.052.48.154.11.096.157.199.157.331 0 .059-.013.11-.043.16a.906.906 0 0 1-.16.199l-.097.088c-.058.05-.129.112-.214.182l-.089.074c-.227.188-.409.352-.547.492a1.88 1.88 0 0 0-.374.553 1.817 1.817 0 0 0-.145.749c0 .274.086.504.266.667a.886.886 0 0 0 .609.227c.424 0 .723-.223.83-.615l.078-.313a.548.548 0 0 1 .054-.138.65.65 0 0 1 .09-.117c.04-.043.09-.092.153-.148l.4-.341c.197-.17.344-.299.442-.39a2.27 2.27 0 0 0 .43-.545c.133-.232.198-.498.198-.792 0-.372-.111-.72-.33-1.033a2.163 2.163 0 0 0-.902-.727 3.075 3.075 0 0 0-1.286-.256ZM13.063 11.875a1.01 1.01 0 0 1 .704-.268.99.99 0 0 1 .698.27.915.915 0 0 1 .294.684c0 .29-.107.537-.317.714a1.028 1.028 0 0 1-.675.245c-.256 0-.488-.082-.682-.24a.892.892 0 0 1-.323-.719.91.91 0 0 1 .301-.686Z"
                            class="fill-[#10A8E5] group-hover:fill-white"></path>
                        <p class="font-bold text-base">Tanya Tentang Galang Dana</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fast way End -->

    <!-- Slider Banner Start -->
    <section class="bg-white my-2 px-4 py-4">
        <div id="indicators-carousel" class="relative h-48" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out border bg-red-300 rounded-lg overflow-hidden h-[calc(100%-32px)]"
                    data-carousel-item="active">
                    <img src="{{ asset('img/car1-1.avif') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out border bg-red-300 rounded-lg overflow-hidden h-[calc(100%-32px)]"
                    data-carousel-item>
                    <img src="{{ asset('img/car2.avif') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out border bg-red-300 rounded-lg overflow-hidden h-[calc(100%-32px)]"
                    data-carousel-item>
                    <img src="{{ asset('img/car3.avif') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out border bg-red-300 rounded-lg overflow-hidden h-[calc(100%-32px)]"
                    data-carousel-item>
                    <img src="{{ asset('img/car4.avif') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-4 left-1/2">
                <button id="carousel-item-1" type="button" class="w-3 h-3 rounded-full" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button id="carousel-item-2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button id="carousel-item-3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button id="carousel-item-4" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                    aria-label="Slide 4" data-carousel-slide-to="3"></button>
            </div>
        </div>
    </section>
    <!-- Slider Banner End -->

    <!-- Jenis Donasi Start -->
    <section class="bg-white my-2 pb-20 pt-4 px-5">
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
    <section class="bg-white my-2">
        <div class="container py-4">
            <h3 class=" text-[#4A4A4A] font-semibold text-base mb-4">Program Spesial Beriarti</h3>
            <div class="flex gap-x-4 overflow-x-auto pb-4">
                <div
                    class="w-3/4 min-w-[75%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 h-full">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/gempa.avif') }}" alt="" />
                    </a>
                    <div class="py-4 px-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-sm font-semibold">Gempa Susulan Terjang Tur...</p>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-1/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm font-medium ">Rp 10.382.694</span>
                                <span class="text-sm font-medium ">9 hari lagi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-3/4 min-w-[75%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 h-full">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/beasiswa.avif') }}" alt="" />
                    </a>
                    <div class="py-4 px-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-sm font-semibold">Beasiswa Pendidikan, Lukis...</p>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-1/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm font-medium ">Rp 53.366.186</span>
                                <span class="text-sm font-medium ">18 hari lagi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-3/4 min-w-[75%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 h-full">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/berkah.avif') }}" alt="" />
                    </a>
                    <div class="py-4 px-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-sm font-semibold">Raih Berkah Sedekah Reno...</p>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-1/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm font-medium ">Rp 10.382.694</span>
                                <span class="text-sm font-medium ">9 hari lagi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-3/4 min-w-[75%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 h-full">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/stunting.avif') }}" alt="" />
                    </a>
                    <div class="py-4 px-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-sm font-semibold">Atasi Stuning, Bangun Generasi...</p>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-1/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm font-medium ">Rp 12.731.573</span>
                                <span class="text-sm font-medium ">61 hari lagi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Spesial End -->

    <!-- Section Zakat Start -->
    <section class="my-2">
        <img src="{{ asset('img/zakat.avif') }}" alt="">
    </section>
    <!-- Section Zakat End -->

    <!-- Pilihan Beriarti Start -->
    <section class="bg-white my-2">
        <div class="container py-4">
            <div class="flex justify-between items-center mb-4">
                <p class="text-base font-semibold text-[#4A4A4A]">Pilihan Beriarti</p>
                <p class="text-sm text-[#00aeef]">Lihat Lainnya</p>
            </div>
            <div class="flex gap-x-4 overflow-x-auto pb-4">
                <div
                    class="w-2/5 min-w-[40%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/pil1.avif') }}" alt="" />
                    </a>
                    <div class="p-2 pb-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-xs font-semibold">Alirkan Pahala: Wakar Air untuk Masjid...</p>
                            <div class="flex">
                                <span class="font-normal text-[10px] mr-2">Masjid Nusantara</span>
                                <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                    class="w-[31px] h-3">
                            </div>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-4/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex flex-col gap-y-1 mt-2">
                                <span class="text-[10px] font-normal ">Terkumpul</span>
                                <span class="text-sm font-medium ">Rp 4.485.253.729</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-2/5 min-w-[40%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/pil2.avif') }}" alt="" />
                    </a>
                    <div class="p-2 pb-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-xs font-semibold">Bantu Anak-Anak Asmat yang...</p>
                            <div class="flex">
                                <span class="font-normal text-[10px] mr-2">Wahana Visi Indo...</span>
                                <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                    class="w-[31px] h-3">
                            </div>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-3/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex flex-col gap-y-1 mt-2">
                                <span class="text-[10px] font-normal ">Terkumpul</span>
                                <span class="text-sm font-medium ">Rp 173.860.515</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-2/5 min-w-[40%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/pil3.avif') }}" alt="" />
                    </a>
                    <div class="p-2 pb-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-xs font-semibold">Alirkan Pahala Jariyah dengan...</p>
                            <div class="flex">
                                <span class="font-normal text-[10px] mr-2">Yayasan Galang...</span>
                                <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                    class="w-[31px] h-3">
                            </div>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-4/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex flex-col gap-y-1 mt-2">
                                <span class="text-[10px] font-normal ">Terkumpul</span>
                                <span class="text-sm font-medium ">Rp 25.152.604</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-2/5 min-w-[40%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/pil5.avif') }}" alt="" />
                    </a>
                    <div class="p-2 pb-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-xs font-semibold">Gagal Jantung, Pendeta Muda Tak...</p>
                            <div class="flex">
                                <span class="font-normal text-[10px] mr-2">Viktorius Wau</span>
                                <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                    class="w-[31px] h-3">
                            </div>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-2/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex flex-col gap-y-1 mt-2">
                                <span class="text-[10px] font-normal ">Terkumpul</span>
                                <span class="text-sm font-medium ">Rp 23.720.564</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-2/5 min-w-[40%] bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/pil4.avif') }}" alt="" />
                    </a>
                    <div class="p-2 pb-2">
                        <div class="flex flex-col gap-y-2">
                            <p class=" text-xs font-semibold">Sedekah Utama, Mushola Pertama...</p>
                            <div class="flex">
                                <span class="font-normal text-[10px] mr-2">Baitul Maal Hi...</span>
                                <img src="{{ asset('img/verified_icon-org.svg') }}" alt=""
                                    class="w-[31px] h-3">
                            </div>
                            <div class="bg-slate-200 overflow-hidden w-full rounded-full h-1">
                                <div class="w-4/5 h-full bg-blue-400"></div>
                            </div>
                            <div class="flex flex-col gap-y-1 mt-2">
                                <span class="text-[10px] font-normal ">Terkumpul</span>
                                <span class="text-sm font-medium ">Rp 4.38.258.957</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pilihan Beriarti End -->

    <!-- Sponsor Start -->
    <section class="my-2">
        <img src="{{ asset('img/sponsor.avif') }}" alt="">
    </section>
    <!-- Sponsor End -->
    <div class="mb-96"></div>


    <!-- Navbar Start -->
    <nav class="bg-white fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full">
        <div class="container grid grid-cols-4 gap-x-1 font-semibold items-center h-full text-xs">

            <!-- Home Navbar -->
            <div class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset('img/home_navbar_active.svg') }}" alt="" class="w-8">
                <p class="w-full text-center text-[10px] text-[#00AEEF]">Donasi</p>
            </div>

            <!-- Galang Dana Navbar -->
            <div class="flex flex-col flex-wrap items-center justify-center">
                <img src="{{ asset('img/galang-navbar.svg') }}" alt="" class="w-8">
                <p class="text-center text-[10px] text-slate-400">Galang Dana</p>
            </div>

            <!-- Donasi Navbar -->
            <div class="flex flex-col flex-wrap items-center justify-center">
                <img src="{{ asset('img/donasi-navbar.svg') }}" alt="" class="w-8">
                <p class="text-[10px] text-slate-400">Donasi Saya</p>
            </div>
            <!-- Account Navbar -->
            <div class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset('img/account-navbar.svg') }}" alt="" class="w-8">
                <p class="w-full text-center text-[10px] text-slate-400">Akun</p>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <script src="{{ asset('js/flowbite.min.js') }}"></script>
</body>

</html>
