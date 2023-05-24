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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <title>Beriarti - Memberikan Harapan dan Mengubah Dunia dengan Aksi Nyata</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F7F7F7] font-rubik">
    <section class="bg-primer h-16 py-3 z-[100] fixed top-0 left-0 right-0 w-full mb-4">
        <div class="flex justify-start h-full container">
            <a href="/" class="h-full lg:max-w-lg flex items-center">
                <img src="{{ asset('img/icons/navigation/left-arrow-white.svg') }}" alt="">
            </a>
            <div class="container h-full lg:max-w-lg flex items-center">
                <h4 class="text-white font-semibold text-base">Diurutkan {{ $title }}</h4>
            </div>
        </div>
    </section>

    <section class="pt-16 mb-4">
        <div class="container border-b pb-2">
            <div class="mt-4 flex w-full text-sm">
                <a href="{{ route('program.ganti') }}" class="w-1/2">
                    <div class="flex flex-col items-center">
                        <div class="flex mb-[6px]">
                            <img src="{{ asset('img/icons/kategori-icon.svg') }}" alt="" class="w-5 h-5">
                            <span class="text-sm font-semibold text-[#4A4A4A] ml-2">Kategori</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('program.sorting') }}" class="w-1/2">
                    <div class="flex flex-col items-center border-l">
                        <div class="flex mb-[6px]">
                            <img src="{{ asset('img/icons/sort-icon.svg') }}" alt="" class="w-5 h-5">
                            <span class="text-sm font-semibold text-[#4A4A4A] ml-2">Urutkan</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="scrolling-pagination">
            @foreach ($programs as $program)
                <a href="/detail/{{ $program->id }}" class="inline-block my-4 program-item px-4">
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
            @endforeach
            {{ $programs->links() }}
        </div>
    </section>

    <script>
        $('nav[aria-label="Pagination Navigation"]').hide();
        $(function() {
            $('.scrolling-pagination').jscroll({
                autoTrigger: true,
                padding: 0,
                contentSelector: 'div.scrolling-pagination',
                callback: function() {
                    $('nav[aria-label="Pagination Navigation"]').remove();
                },
            });
        });
    </script>

</body>

</html>
