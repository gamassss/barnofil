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
            <a href="{{ url()->previous() }}" class="w-[18px] h-[18px] grid place-items-center mr-[18px]">
                <img src="{{ asset('img/prev-icon.webp') }}" alt="">
            </a>
            <h4 class="text-white font-semibold text-base">{{ $nama }}</h4>
        </div>
    </section>
    <section class="bg-white pt-16 pb-4">
        <form action="/payment" class="container">
            <div class="border-b pb-4">
                <p class="my-[1em] mx-0 text-[#272727] text-sm">Isi Nominal Donasi</p>
                <input
                    class="h-[52px] w-full rounded-md border-none border-coal bg-[#F2F3F4] py-[7.5px] pl-[1.9em] pr-[15px] text-right text-[1.5rem] font-bold focus:outline-none"
                    name="amount" placeholder="Rp" id="nominal" type="tel" value="Rp {{ number_format($nominal, 0, ',', '.') }}" autocomplete="off">
                <input type="hidden" name="name" value="{{ $username }}">
                <input type="hidden" name="user_id" value="{{ $user_id }}">
                <input type="hidden" name="program_id" value="{{ $id }}">
                <input type="hidden" name="email" value="{{ $user_email }}">
            </div>
            <div class="pt-4 flex flex-col">
                <p class="font-semibold text-base text-[#4A4A4A]">{{ $username }}</p>
                <p class="font-normal text-sm text-[#989898] mb-4">{{ $user_email }}</p>
                <div class="flex justify-between items-center">
                    <label for="donasi-anonim"><span class="text-sm text-[#4A4A4A]">Sembunyikan nama saya (donasi
                            sebagai
                            anonim)</span>
                    </label>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                    </label>
                </div>
            </div>

            <p class="mt-5 mb-4 text-sm text-[#4A4A4A]">Berdoa di donasi ini (opsional)</p>

            <textarea
                class="h-full min-h-[70px] w-full rounded-md border border-solid border-[#ccd0d3] bg-white px-2 pt-2.5 pb-4 focus:outline-none fontsninja-family-12314"
                data-testid="contribute-textarea-dua" id="contribute-textarea-dua" maxlength="280" rows="5"
                placeholder="Tulis doa untuk penggalang dana atau dirimu sendiri di sini. Biar doa kamu bisa dilihat dan diamini oleh #OrangBaik lainnya."
                style="resize: none;"></textarea>

            <div class="my-3 items-center rounded-md bg-[#F2F3F4] p-4">
                <p class="text-xs text-[#4A4A4A]">Nominal di atas termasuk 5% donasi operasional Yayasan Kitabisa,
                    kecuali untuk kategori zakat serta bencana skala provinsi & nasional.</p>
                <p class="underline text-xs text-primer">Selengkapnya</p>
            </div>

            <nav
                class="bg-[#F7F7F7] fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full lg:max-w-lg lg:mx-auto py-2 px-[14px]">
                <button onclick="window.location.href='/amount/{{ $id }}'" type="submit"
                    class="bg-[#CB1552] text-white hover:bg-[#a60e41] font-bold text-base w-full h-full rounded-md">Lanjut
                    Pembayaran</button>
            </nav>
        </form>
    </section>

    <script>
        var input = document.getElementById("nominal");
        input.addEventListener("input", function() {
            var value = input.value;
            value = value.replace(/\D/g, ''); // menghilangkan karakter selain angka
            value = "Rp " + value.replace(/\B(?=(\d{3})+(?!\d))/g,
                "."); // menambahkan "Rp" dan memisahkan ribuan dengan titik
            input.value = value;
        });
    </script>
</body>

</html>
