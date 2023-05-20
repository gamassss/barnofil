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
        <div class="flex h-full">
            <a href="{{ url()->previous() }}" class="container h-full lg:max-w-lg w-fit flex items-center">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    role="img" class="w-5">
                    <path
                        d="M12.86 5.076a1.216 1.216 0 1 0-1.72-1.72L3.356 11.14a1.216 1.216 0 0 0 0 1.72l7.784 7.784a1.216 1.216 0 0 0 1.72-1.72l-5.708-5.708h12.632a1.216 1.216 0 1 0 0-2.432H7.152l5.708-5.708Z"
                        fill="#FEFEFE"></path>
                </svg>
            </a>
            <div class="container h-full lg:max-w-lg flex items-center">
                <h4 class="text-white font-semibold text-base">Galang dana saya</h4>
            </div>
        </div>
    </section>

    <section class="bg-white pt-16 pb-4">
        <div class="container">
            <div class="mt-6">
                <h2 class="font-semibold text-[#4A4A4A] text-base">Buat galang dana</h2>
            </div>

            <!-- Button Tambah Galang Dana -->
            <button onclick="window.location.href='{{ route('galangdana.pilih_kategori') }}'"
                class="mt-4 mb-3 py-4 rounded-sm w-full font-bold text-primer text-center border-2 border-dashed border-primer">
                Buat baru galang dana +
            </button>

            <div class="flex py-2 px-3 rounded items-start bg-[#E6F5FB]">
                <img src="{{ asset('img/icons/question-mark-white.svg') }}" alt=""
                    class="mr-2 w-[14px] h-[14px]">
                <p class="text-xs">Ingin galang danamu lebih sukses? <a href="#"
                        class="text-primer font-semibold">Lihat panduan galang dana</a></p>
            </div>
        </div>
    </section>

    <section class="mt-6 bg-white pb-16">
        <div class="container">
            <div class="mt-6 mb-4">
                <h2 class="font-semibold text-[#4A4A4A] text-base">Menunggu</h2>
            </div>
            <div class="flex flex-col">
                @foreach ($waiting_list_programs as $program)
                    <div class="border rounded border-gray-300 py-3 mb-4 px-3 flex gap-x-2 w-full flex-wrap">
                        <img src="{{ asset($program->banner_img) }}" alt=""
                            class="max-w-[30%] rounded">
                        <div class="flex flex-col justify-between">
                            <p class="text-sm font-semibold text-[#4A4A4A]">{{ $program->nama }}</p>
                            <p class="text-xs text-[#4A4A4A] font-light">Disubmit pada {{ $program->created_at }}</p>
                        </div>
                        <div class="mx-auto w-full bg-gray-200/70 rounded-full my-4 h-1">
                        </div>
                        <div class="flex justify-between items-center w-full gap-x-2">
                            <button class="text-primer font-bold text-base py-1 px-2 border rounded border-primer w-full hover:text-white hover:bg-primerhover transition">Lihat detail</button>
                            <button class="py-1 px-2 border rounded border-gray-300 grid place-items-center">
                                <img src="{{ asset('img/icons/bin.svg') }}" alt="" style="height: 25px;">
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- @foreach ($waiting_list_programs as $program)
                
            @endforeach --}}
        </div>
    </section>

    @include('layout.navbar')
    {{-- <script>
            console.log({!! json_encode($programs_submitted) !!})
        </script> --}}
</body>

</html>
