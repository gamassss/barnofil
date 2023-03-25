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
    <section class="bg-primer h-16 py-3 z-[100] fixed top-0 left-0 right-0 w-full">
        <div class="container h-full lg:max-w-lg flex items-center">
            <h4 class="text-white font-semibold text-base">Akun</h4>
        </div>
    </section>

    @guest
        <!-- Login and Registration Section -->
        <section class="bg-white pt-16 pb-4">
            <div class="container">
                <div class="my-6 mx-2">
                    <h3 class="text-lg text-[#4A4A4A] font-semibold">Masuk untuk nikmati mudahnya donasi dan akses ke fitur
                        lainnya!</h3>
                </div>
                <a href="/login"
                    class="group w-full h-12 bg-white rounded-md transition duration-300 py-2 flex items-center justify-center border border-primer text-primer hover:text-white hover:bg-primer">
                    <p class="font-bold text-sm">Masuk Sekarang</p>
                </a>
                <a href="/signup" class="mt-4 inline-block w-full text-center">
                    <p class="text-sm text-[#4A4A4A] font-normal">Belum punya akun? <span
                            class="text-primer font-semibold">Daftar</span></p>
                </a>
            </div>
        </section>

        <!-- User Link Section -->
        <section class="mt-2 bg-white">
            <div class="container">
                <!-- Bantuan Section -->
                <div class="py-[21px] px-[7px] border-b">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img" class="text-xl">
                                <path
                                    d="M5 13.286V7.028c-.197.028.183-.065 0 0a3.001 3.001 0 0 0-2 2.83v3.856c0 1.21.358 2.337.975 3.28.085.928-.096 1.814-.324 2.513-.23.704.223 1.489.942 1.309.764-.192 1.675-.596 2.433-1.434A5.99 5.99 0 0 0 9 19.714h2.857c1.36 0 2.56-.678 3.283-1.714.184-.264-.117.305 0 0H9.43C7.299 18 5 15.416 5 13.286Z"
                                    fill="#10A8E5"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.857 3.75A2.25 2.25 0 0 0 7.607 6v6.857a2.25 2.25 0 0 0 2.25 2.25H15c.56 0 1.098-.087 1.602-.249l.446-.142.324.337c.68.708 1.493 1.05 2.189 1.213a.184.184 0 0 0 .017.004.138.138 0 0 0 .016-.021.411.411 0 0 0 .025-.34c-.248-.732-.463-1.68-.413-2.705l.01-.212.12-.175c.577-.842.914-1.86.914-2.96V6A2.25 2.25 0 0 0 18 3.75H9.857Zm9.73 12.52h-.002.001ZM6.106 6a3.75 3.75 0 0 1 3.75-3.75H18A3.75 3.75 0 0 1 21.75 6v3.857c0 1.33-.385 2.572-1.05 3.618-.005.707.148 1.386.34 1.953.19.561.115 1.178-.192 1.644-.325.495-.923.82-1.628.655a5.945 5.945 0 0 1-2.598-1.316 6.763 6.763 0 0 1-1.622.196H9.857a3.75 3.75 0 0 1-3.75-3.75V6Z"
                                    fill="#6A6A6A"></path>
                                <path
                                    d="M13.875 5.5c-.517 0-.977.102-1.376.308-.397.205-.706.47-.921.793-.216.326-.328.66-.328.995 0 .223.096.425.271.594.176.17.398.258.649.258.402 0 .7-.221.854-.61l.033-.093c.09-.255.199-.446.317-.566.088-.088.25-.14.501-.14.208 0 .363.052.48.154.11.096.157.199.157.331 0 .059-.013.11-.043.16a.906.906 0 0 1-.16.199l-.097.088c-.058.05-.129.112-.214.182l-.089.074c-.227.188-.409.352-.547.492a1.88 1.88 0 0 0-.374.553 1.817 1.817 0 0 0-.145.749c0 .274.086.504.266.667a.886.886 0 0 0 .609.227c.424 0 .723-.223.83-.615l.078-.313a.548.548 0 0 1 .054-.138.65.65 0 0 1 .09-.117c.04-.043.09-.092.153-.148l.4-.341c.197-.17.344-.299.442-.39a2.27 2.27 0 0 0 .43-.545c.133-.232.198-.498.198-.792 0-.372-.111-.72-.33-1.033a2.163 2.163 0 0 0-.902-.727 3.075 3.075 0 0 0-1.286-.256ZM13.063 11.875a1.01 1.01 0 0 1 .704-.268.99.99 0 0 1 .698.27.915.915 0 0 1 .294.684c0 .29-.107.537-.317.714a1.028 1.028 0 0 1-.675.245c-.256 0-.488-.082-.682-.24a.892.892 0 0 1-.323-.719.91.91 0 0 1 .301-.686Z"
                                    fill="#6A6A6A"></path>
                            </svg>
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Bantuan</span>
                        <!-- Next icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                                    fill="#D8D8D8"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Tentang Beriarti Section -->
                <div class="py-[21px] px-[7px] border-b">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center w-6 h-6">
                            <img src="{{ asset('img/beriarti-logo.png') }}" alt="">
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Tentang Beriarti</span>
                        <!-- Next icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                                    fill="#D8D8D8"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Syarat dan Ketentuan Section -->
                <div class="py-[21px] px-[7px]">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img" class="text-xl">
                                <path d="M19 7.236a3 3 0 1 0-4 0V11l2-1.5 2 1.5V7.236Z" fill="#10A8E5"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.25 6A3.75 3.75 0 0 1 7 2.25h5.968a.75.75 0 0 1 0 1.5H7A2.25 2.25 0 0 0 4.75 6v13A2.25 2.25 0 0 0 7 21.25h8A2.25 2.25 0 0 0 17.25 19v-6.875a.75.75 0 0 1 1.5 0V19A3.75 3.75 0 0 1 15 22.75H7A3.75 3.75 0 0 1 3.25 19V6Z"
                                    fill="#6A6A6A"></path>
                                <path
                                    d="M11.25 15h-3.5a.25.25 0 1 1 0-.5h3.5a.25.25 0 1 1 0 .5Zm3 3h-6.5a.25.25 0 1 1 0-.5h6.5a.25.25 0 1 1 0 .5Z"
                                    stroke="#6A6A6A"></path>
                            </svg>
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Syarat &
                            Ketentuan</span>
                        <!-- Next icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                                    fill="#D8D8D8"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endguest

    @auth
        <section class="bg-white pt-16 pb-4">
            <div class="container">
                <div class="py-[21px] px-[7px] flex">
                    <!-- Profile Pic -->
                    <div class="w-12 h-12 mr-[10px] bg-[#E8E8E8] rounded-full self-center grid place-items-center">
                        {{ $inisial }}
                    </div>

                    <!-- Nama dan edit profile -->
                    <div class="flex-row justify-between">
                        <p class="text-[#3A3A3A] text-base font-semibold mb-2">{{ $nama }}</p>
                        <a href="/login"
                            class="grouppx-[23px] py-[6px] bg-white rounded-md transition duration-300 flex items-center justify-center border border-primer text-primer hover:text-white hover:bg-primer">
                            <p class="font-bold text-xs">Edit Profile</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endauth

    @include('layout.navbar')
</body>

</html>
