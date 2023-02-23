<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F7F7F7]">
    <!-- Search Section Start -->
    <section class="bg-[#00AEEF] h-16 py-3 fixed top-0 w-full">
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
                        <p class="font-raleway font-medium text-sm">Bantu sesama, cari 'pengobatan'</p>

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
        <div class="container font-raleway py-4">
            <h3 class="font-bold tracking-wider text-lg mt-1">Ingin Menggalang Dana?</h3>
            <div class="flex flex-wrap mt-6 flex-row gap-2">
                <!-- Blue Button -->
                <div class="w-full h-12 bg-[#00aeef] rounded-full py-2 flex items-center justify-center">
                    <p class="font-bold text-lg text-white">Galang Dana Sekarang</p>
                </div>
                <!-- White button-->
                <div
                    class="w-full h-12 bg-white rounded-full py-2 flex items-center justify-center border border-[#00aeef] text-[#00aeef]">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="mr-2 inline w-[21px]">
                        <path
                            d="M5 13.286V7.028c-.197.028.183-.065 0 0a3.001 3.001 0 0 0-2 2.83v3.856c0 1.21.358 2.337.975 3.28.085.928-.096 1.814-.324 2.513-.23.704.223 1.489.942 1.309.764-.192 1.675-.596 2.433-1.434A5.99 5.99 0 0 0 9 19.714h2.857c1.36 0 2.56-.678 3.283-1.714.184-.264-.117.305 0 0H9.43C7.299 18 5 15.416 5 13.286Z"
                            fill="#10A8E5"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.857 3.75A2.25 2.25 0 0 0 7.607 6v6.857a2.25 2.25 0 0 0 2.25 2.25H15c.56 0 1.098-.087 1.602-.249l.446-.142.324.337c.68.708 1.493 1.05 2.189 1.213a.184.184 0 0 0 .017.004.138.138 0 0 0 .016-.021.411.411 0 0 0 .025-.34c-.248-.732-.463-1.68-.413-2.705l.01-.212.12-.175c.577-.842.914-1.86.914-2.96V6A2.25 2.25 0 0 0 18 3.75H9.857Zm9.73 12.52h-.002.001ZM6.106 6a3.75 3.75 0 0 1 3.75-3.75H18A3.75 3.75 0 0 1 21.75 6v3.857c0 1.33-.385 2.572-1.05 3.618-.005.707.148 1.386.34 1.953.19.561.115 1.178-.192 1.644-.325.495-.923.82-1.628.655a5.945 5.945 0 0 1-2.598-1.316 6.763 6.763 0 0 1-1.622.196H9.857a3.75 3.75 0 0 1-3.75-3.75V6Z"
                            fill="#10A8E5"></path>
                        <path
                            d="M13.875 5.5c-.517 0-.977.102-1.376.308-.397.205-.706.47-.921.793-.216.326-.328.66-.328.995 0 .223.096.425.271.594.176.17.398.258.649.258.402 0 .7-.221.854-.61l.033-.093c.09-.255.199-.446.317-.566.088-.088.25-.14.501-.14.208 0 .363.052.48.154.11.096.157.199.157.331 0 .059-.013.11-.043.16a.906.906 0 0 1-.16.199l-.097.088c-.058.05-.129.112-.214.182l-.089.074c-.227.188-.409.352-.547.492a1.88 1.88 0 0 0-.374.553 1.817 1.817 0 0 0-.145.749c0 .274.086.504.266.667a.886.886 0 0 0 .609.227c.424 0 .723-.223.83-.615l.078-.313a.548.548 0 0 1 .054-.138.65.65 0 0 1 .09-.117c.04-.043.09-.092.153-.148l.4-.341c.197-.17.344-.299.442-.39a2.27 2.27 0 0 0 .43-.545c.133-.232.198-.498.198-.792 0-.372-.111-.72-.33-1.033a2.163 2.163 0 0 0-.902-.727 3.075 3.075 0 0 0-1.286-.256ZM13.063 11.875a1.01 1.01 0 0 1 .704-.268.99.99 0 0 1 .698.27.915.915 0 0 1 .294.684c0 .29-.107.537-.317.714a1.028 1.028 0 0 1-.675.245c-.256 0-.488-.082-.682-.24a.892.892 0 0 1-.323-.719.91.91 0 0 1 .301-.686Z"
                            fill="#10A8E5"></path>
                        <p class="font-bold text-lg">Tanya Tentang Galang Dana</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fast way End -->

    <!-- Slider Banner Start -->
    <section class="bg-white my-2 h-40">
        <div class="container flex justify-center items-center h-full">
            <h1 class="text-4xl font font-raleway font-medium">SLIDER BANNER</h1>
        </div>
    </section>
    <!-- Slider Banner End -->

    <!-- Jenis Donasi Start -->
    <section class="bg-white my-2 pb-20 pt-4 px-5">
        <div class="container flex h-full justify-between">
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

    <!-- Penggalangan Mendesak Start -->
    <section class="bg-white my-2">
        <div class="container py-4 h-full">
            <h3 class="font-raleway text-black font-bold text-lg tracking-wide mb-4">Penggalangan Dana Mendesak</h3>
            <div class="flex gap-x-4 overflow-auto scrollbar-hide h-full mb-8">
                <div class="min-w-[75%] shadow-lg shadow-blue-200 rounded-lg overflow-hidden max-w-[75%] flex flex-col flex-wrap">
                    <img src="{{ asset('img/gempa.avif') }}" alt="" class="object-contain max-h-[66.666%]">
                    <div class="w-full max-h-[33.333%] h-full px-2 py-2">
                        <p class="font-raleway text-xs font-semibold">URGENT Solidaritas Bantu Korban Gempa...</p>
                        <hr class="my-3">
                        <div class="flex justify-between font-raleway font-semibold">
                            <p>Rp 1.349.524.421</p>
                            <p>8 hari lagi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Penggalangan Mendesak End -->
		<div class="mb-96"></div>
    <!-- Navbar Start -->
    <nav class="bg-white fixed bottom-0 left-0 right-0 h-20 border-t-[1px] w-full">
        {{-- <div class="container flex py-2 h-full">
				<!-- Nav Donasi Start -->
				<div class="bg-red-300 h-full w-full flex flex-row items-center">
					<img src="{{ asset('img/home-navbar.svg') }}" alt="">
					<p>Donasi</p>
				</div>
				<!-- Nav Donasi End -->
			</d> --}}
        <div class="container grid grid-cols-4 gap-x-1 items-center h-full text-xs font-normal">

            <!-- Home Navbar -->
            <div class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset('img/home_navbar_active.svg') }}" alt="" class="w-8">
                <p class="w-full text-center">Donasi</p>
            </div>

            <!-- Galang Dana Navbar -->
            <div class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset('img/galang-navbar.svg') }}" alt="" class="w-8">
                <p class="text-center">Galang Dana</p>
            </div>

            <!-- Donasi Navbar -->
            <div class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset('img/donasi-navbar.svg') }}" alt="" class="w-8">
                <p>Donasi Saya</p>
            </div>

            <!-- Inbox Navbar -->
            {{-- <div class="flex flex-row flex-wrap items-center justify-center">
					<img src="{{ asset('img/inbox-navbar.svg') }}" alt="" class="w-8">
					<p class="w-full text-center">Inbox</p>
				</div> --}}

            <!-- Account Navbar -->
            <div class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset('img/account-navbar.svg') }}" alt="" class="w-8">
                <p class="w-full text-center">Akun</p>
            </div>


        </div>
    </nav>
    <!-- Navbar End -->

</body>

</html>
