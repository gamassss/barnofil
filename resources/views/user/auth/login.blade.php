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
        <section class="bg-white pt-16">
            <div class="container">
                <div class="py-[21px] px-[7px] flex border-b">
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
                <div class="py-[21px] px-[7px] border-b">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img" class="text-xl">
                                <path
                                    d="m7.048 6.383-.542.519.542-.519Zm.398.416.541-.52-.541.52Zm2.397.616.242.71a.75.75 0 0 0-.242-1.46v.75Zm-5.384 6.86.747.066-.747-.067Zm-.163 1.824-.747-.066.747.066Zm15.936 0 .747-.066-.747.067Zm-.163-1.825.747-.066-.747.066Zm-5.384-6.859v-.75a.75.75 0 0 0-.242 1.46l.242-.71Zm2.397-.616.542.518-.542-.518Zm.398-.416.541.519-.541-.519Zm-9.89-.519c-.761-.794-.198-2.114.903-2.114v-1.5c-2.422 0-3.661 2.903-1.987 4.652L7.59 5.864Zm.397.416-.397-.416-1.084 1.038.398.415L7.987 6.28Zm.903.385a1.25 1.25 0 0 1-.903-.385L6.904 7.317a2.75 2.75 0 0 0 1.986.848v-1.5Zm.953 0H8.89v1.5h.953v-1.5Zm-4.637 7.676a7.25 7.25 0 0 1 4.878-6.216l-.483-1.42a8.75 8.75 0 0 0-5.89 7.503l1.495.133Zm-.163 1.825.163-1.825-1.494-.133-.163 1.825 1.494.133Zm4.233 4.629a4.25 4.25 0 0 1-4.233-4.629l-1.494-.133a5.75 5.75 0 0 0 5.727 6.262v-1.5Zm5.976 0H9.276v1.5h5.976v-1.5Zm4.233-4.629a4.25 4.25 0 0 1-4.233 4.629v1.5a5.75 5.75 0 0 0 5.727-6.262l-1.494.133Zm-.163-1.825.163 1.825 1.494-.133-.163-1.825-1.494.133Zm-4.879-6.216a7.25 7.25 0 0 1 4.879 6.216l1.494-.133a8.75 8.75 0 0 0-5.889-7.502l-.484 1.42Zm1.194-1.46h-.952v1.5h.952v-1.5Zm.903-.385a1.25 1.25 0 0 1-.903.385v1.5a2.75 2.75 0 0 0 1.987-.848L16.54 6.28Zm.398-.416-.398.416 1.084 1.037.398-.415-1.084-1.038Zm-.903-2.114c1.1 0 1.664 1.32.903 2.114l1.084 1.038c1.674-1.75.434-4.652-1.987-4.652v1.5Zm-7.542 0h7.542v-1.5H8.493v1.5Z"
                                    fill="#6A6A6A"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.764 5.7a.5.5 0 0 0-1 0v.957h-1V6.2a.5.5 0 0 0-1 0v.457H7.102c-1.452 0-2.84.548-3.896 1.52-.305.28-.26.757.058 1.023.318.266.787.217 1.105-.049a4.254 4.254 0 0 1 2.733-.994H17.426c1.008 0 1.974.357 2.733.994.318.266.787.315 1.105.049.318-.266.363-.743.058-1.024a5.754 5.754 0 0 0-3.896-1.519h-2.662V6.2a.5.5 0 0 0-1 0v.457h-1V5.7Z"
                                    fill="#6A6A6A"></path>
                                <path
                                    d="M13.325 12.146a2.141 2.141 0 0 0-1.053.56c-.09.086-.19.164-.272.234-.1-.087-.212-.182-.323-.28-.435-.383-.945-.588-1.55-.555a1.678 1.678 0 0 0-1.084.442c-.576.537-.768 1.179-.565 1.917.104.378.297.716.53 1.037.362.5.806.932 1.282 1.338.202.172.409.337.62.498.626.474 1.486.465 2.138.028.55-.406 1.063-.848 1.52-1.346.298-.326.563-.673.76-1.063.144-.284.243-.58.267-.896a1.766 1.766 0 0 0-.343-1.184c-.44-.62-1.148-.891-1.927-.73Z"
                                    fill="#10A8E5"></path>
                            </svg>
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Kantong Donasimu</span>
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
                <div class="py-[21px] px-[7px]">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img" class="text-xl">
                                <path
                                    d="M20.104 7.04c.347.565 1.13.743 1.454.164a3.5 3.5 0 0 0-4.762-4.762c-.579.323-.401 1.107.164 1.454a9.549 9.549 0 0 1 3.144 3.144ZM3.896 7.04c-.347.565-1.13.743-1.454.164a3.5 3.5 0 0 1 4.762-4.762c.579.323.401 1.107-.164 1.454A9.55 9.55 0 0 0 3.896 7.04Z"
                                    fill="#10A8E5"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.102 20.28 15 18.5l1.743-.981 1.102 1.78a1 1 0 1 1-1.743.982ZM7.275 20.28 8.5 18.5l-1.743-.981-1.225 1.78a1 1 0 1 0 1.743.982Z"
                                    fill="#6A6A6A"></path>
                                <circle cx="12" cy="12" r="7.25" stroke="#6A6A6A"
                                    stroke-width="1.5"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 6.75a.75.75 0 0 1 .75.75v4.599l2.666 1.777a.75.75 0 1 1-.832 1.248l-3-2a.75.75 0 0 1-.334-.624v-5a.75.75 0 0 1 .75-.75Z"
                                    fill="#10A8E5"></path>
                            </svg>
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Pengingat Donasi</span>
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

        <!-- User Link Section -->
        <section class="mt-2 bg-white">
            <div class="container">
                <!-- Pengaturan Section -->
                <div class="py-[21px] px-[7px] border-b">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center w-6 h-6">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img" class="text-xl">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.456 3.766a.235.235 0 0 0-.043.049 3.556 3.556 0 0 1-2.969 1.602 3.556 3.556 0 0 1-2.968-1.602.236.236 0 0 0-.043-.049l-.003-.003a7.69 7.69 0 0 0-2.086 1.334l.003.015c.006.02.014.04.026.06a3.61 3.61 0 0 1 .158 3.38 3.564 3.564 0 0 1-2.707 2.013.226.226 0 0 0-.067.021 8.01 8.01 0 0 0 .049 1.272 3.56 3.56 0 0 1 2.925 1.808 3.61 3.61 0 0 1 .106 3.381.246.246 0 0 0-.023.078 7.666 7.666 0 0 0 1.616.945l.003-.003a.24.24 0 0 0 .043-.048l.006-.01c.023-.034.044-.058.05-.065a.828.828 0 0 1 .021-.024l.021-.022.015-.015.01-.009a3.162 3.162 0 0 0 .472-.566l.181-.272c.101-.153.213-.322.3-.445.336-.476.849-1.1 1.702-1.235a3.02 3.02 0 0 1 .341-.034.75.75 0 0 1 .065 1.5 1.522 1.522 0 0 0-.171.015c-.202.032-.403.181-.712.62-.094.132-.163.238-.238.352-.066.1-.136.209-.232.348-.17.249-.377.525-.631.763l-.004.004c-.339.45-1.018.868-1.765.553a9.167 9.167 0 0 1-2.055-1.2c-.671-.52-.614-1.374-.362-1.89a2.111 2.111 0 0 0-.062-1.977 2.06 2.06 0 0 0-1.654-1.04c-.578-.039-1.343-.425-1.45-1.269a9.433 9.433 0 0 1-.063-1.642c.04-.848.771-1.294 1.345-1.378a2.064 2.064 0 0 0 1.568-1.17 2.11 2.11 0 0 0-.092-1.975c-.293-.495-.415-1.342.213-1.913a9.189 9.189 0 0 1 2.612-1.667c.79-.332 1.504.153 1.82.631.373.564 1.004.93 1.717.93.714 0 1.345-.366 1.718-.93.316-.478 1.03-.963 1.82-.631.74.31 1.429.716 2.055 1.2l-1.053.085m-1.528.125.003-.003-.003.003Zm.003-.003c.578.25 1.12.568 1.616.946a.246.246 0 0 1-.023.077 3.611 3.611 0 0 0 .106 3.382 3.56 3.56 0 0 0 2.858 1.792.223.223 0 0 1 .067.015 7.939 7.939 0 0 1 .05 1.272.222.222 0 0 1-.067.021c-.182.027-.347.044-.53.062-.124.013-.256.026-.405.044-.337.04-.716.098-1.087.223a2.38 2.38 0 0 0-1.325 1.12.75.75 0 1 0 1.326.703.882.882 0 0 1 .476-.401c.223-.075.48-.12.786-.155.096-.012.207-.023.324-.035.213-.022.448-.046.652-.077.574-.084 1.304-.53 1.345-1.378a9.505 9.505 0 0 0-.064-1.642c-.106-.844-.87-1.23-1.449-1.269a2.06 2.06 0 0 1-1.654-1.04 2.11 2.11 0 0 1-.062-1.977c.252-.515.31-1.37-.362-1.89m-5.593 5.126c-1.134 0-2.064.93-2.064 2.09a2.078 2.078 0 0 0 2.43 2.059.75.75 0 0 1 .266 1.476 3.548 3.548 0 0 1-.632.056c-1.975 0-3.564-1.614-3.564-3.59 0-1.977 1.59-3.591 3.564-3.591 1.976 0 3.565 1.614 3.565 3.59 0 .642-.167 1.246-.461 1.769a.75.75 0 0 1-1.308-.736c.171-.303.27-.655.27-1.032 0-1.161-.932-2.091-2.066-2.091Z"
                                    fill="#6A6A6A"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.014 18.19a3.506 3.506 0 0 0 .038.912c.015.089.106.145.203.142.477-.016.948.209 1.204.622.255.413.228.905-.027 1.282-.05.076-.044.178.03.235.335.256.714.462 1.126.607a.198.198 0 0 0 .233-.093A1.348 1.348 0 0 1 17 21.235c.511 0 .956.268 1.18.662.044.08.142.125.232.093.512-.18.974-.455 1.361-.803.07-.062.068-.164.01-.236a1.174 1.174 0 0 1-.134-1.276c.22-.43.67-.689 1.147-.708.096-.004.182-.067.19-.157a3.506 3.506 0 0 0-.038-.912c-.015-.089-.106-.145-.203-.142-.477.016-.948-.209-1.204-.622a1.171 1.171 0 0 1 .026-1.282c.052-.076.045-.178-.03-.235a4.076 4.076 0 0 0-1.125-.607.198.198 0 0 0-.233.093 1.348 1.348 0 0 1-1.179.662c-.511 0-.956-.268-1.18-.662a.198.198 0 0 0-.232-.093c-.512.18-.974.456-1.361.803-.07.062-.068.164-.01.236.285.357.354.846.134 1.276-.22.43-.67.689-1.147.708-.096.004-.182.067-.19.157ZM17 19.68c.736 0 1.333-.556 1.333-1.243 0-.686-.597-1.243-1.333-1.243s-1.333.557-1.333 1.243.597 1.243 1.333 1.243Z"
                                    fill="#10A8E5"></path>
                            </svg>
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Pengaturan</span>
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
                <div class="py-[21px] px-[7px] border-b">
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
                <!-- Akuntabilitas Section -->
                <div class="py-[21px] px-[7px]">
                    <div class="flex items-center">
                        <!-- Icon -->
                        <div class="grid place-items-center">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" role="img" class="text-xl">
                                <path d="M17.5 7H20l-5-5v2.5A2.5 2.5 0 0 0 17.5 7Z" fill="#10A8E5"></path>
                                <path
                                    d="M18.5 18.5a2 2 0 0 1-2 2h-9a2 2 0 0 1-2-2v-13a2 2 0 0 1 2-2H13A.75.75 0 0 0 13 2H7a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V9a.75.75 0 0 0-1.5 0v9.5Z"
                                    fill="#6A6A6A"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.817 12.807a2.175 2.175 0 1 1-4.351 0 2.175 2.175 0 0 1 4.35 0Zm-.105 3.195a3.807 3.807 0 1 1 1.066-1.037l2.004 2.004a.743.743 0 1 1-1.051 1.052L13.712 16Z"
                                    fill="#10A8E5"></path>
                            </svg>
                        </div>
                        <span class="w-full mx-4 inline-block text-base font-normal text-[#4A4A4A]">Akuntabilitas &
                            Transparansi</span>
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
				<div class="pb-24"></div>
    @endauth

    @include('layout.navbar')
</body>

</html>
