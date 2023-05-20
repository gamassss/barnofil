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
        <div class="flex justify-start h-full container">
            <a href="{{ url()->previous() }}" class="h-full lg:max-w-lg flex items-center">
                <img src="{{ asset('img/icons/navigation/left-arrow-white.svg') }}" alt="">
            </a>
            <div class="container h-full lg:max-w-lg flex items-center">
                <h4 class="text-white font-semibold text-base">Pilih kategori galang dana</h4>
            </div>
        </div>
    </section>

    <section class="bg-white flex-1 pt-16 pb-4">
        <form action="{{ route('galangdana.create') }}" class="container">
            <!-- Kategori 1 -->
            <button id="pendidikan" class="w-full flex items-center justify-between py-4 border-b">
                <div class="flex items-center">
                    <img src="{{ asset('img/icons/icon-pendidikan.png') }}" alt="" class="w-[40px] h-[40px] rounded">
                    <span class="mx-5 text-left text-sm font-semibold text-[#4A4A4A]">Bantuan Pendidikan</span>
                </div>
                <div class="grid place-items-center justify-sel-end">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#D8D8D8"></path>
                    </svg>
                </div>
            </button>

            <!-- Kategori 2 -->
            <button id="kemanusiaan" class="w-full flex items-center justify-between py-4 border-b">
                <div class="flex items-center">
                    <img src="{{ asset('img/icons/icon-kemanusiaan.png') }}" alt="" class="w-[40px] h-[40px] rounded">
                    <span class="mx-5 text-left text-sm font-semibold text-[#4A4A4A]">Kemanusiaan</span>
                </div>
                <div class="grid place-items-center justify-sel-end">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#D8D8D8"></path>
                    </svg>
                </div>
            </button>

            <!-- Kategori 3 -->
            <button id="lingkungan" class="w-full flex items-center justify-between py-4 border-b">
                <div class="flex items-center">
                    <img src="{{ asset('img/icons/icon-bencana.png') }}" alt="" class="w-[40px] h-[40px] rounded">
                    <span class="mx-5 text-left text-sm font-semibold text-[#4A4A4A]">Bencana</span>
                </div>
                <div class="grid place-items-center justify-sel-end">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#D8D8D8"></path>
                    </svg>
                </div>
            </button>
            <input type="hidden" name="nama_kategori" value="">
        </form>
    </section>

    <script>
        $(document).ready(function () {
            $('#pendidikan').on('click', function () {
                $('input[name=nama_kategori]').val('Pendidikan');
            });
            $('#kemanusiaan').on('click', function () {
                $('input[name=nama_kategori]').val('Kemanusiaan');
            });
            $('#lingkungan').on('click', function () {
                $('input[name=nama_kategori]').val('Bencana');
            });
        });
    </script>
</body>

</html>
