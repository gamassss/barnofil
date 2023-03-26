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
            <h4 class="text-white font-semibold text-base">{{ $nama }}</h4>
        </div>
    </section>
    <section class="bg-white pt-16 pb-4">
        <div class="container">
            <div class="my-4 text-center text-base font-semibold">
                <p>Masukkan Nominal Donasi</p>
            </div>
            <!-- Nominal 30k -->
            <div onclick="window.location.href='/isi_doa/{{ $id }}/{{ Auth::id() }}/30000'" id="jml_30"
                class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-[30px] h-[30px] mr-3">
                            <img src="{{ asset('img/nom1.svg') }}" alt="">
                        </div>
                        <p class="text-base font-bold text-[#4A4A4A]">Rp30.000</p>
                    </div>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="inline text-right text-base">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#10A8E5"></path>
                    </svg>
                </div>
            </div>
            <!-- Nominal 50k -->
            <div onclick="window.location.href='/isi_doa/{{ $id }}/{{ Auth::id() }}/50000'" id="jml_50"
                class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-[30px] h-[30px] mr-3">
                            <img src="{{ asset('img/nom2.svg') }}" alt="">
                        </div>
                        <p class="text-base font-bold text-[#4A4A4A]">Rp50.000</p>
                    </div>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="inline text-right text-base">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#10A8E5"></path>
                    </svg>
                </div>
            </div>
            <!-- Nominal 75k -->
            <div onclick="window.location.href='/isi_doa/{{ $id }}/{{ Auth::id() }}/75000'" id="jml_75"
                class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-[30px] h-[30px] mr-3">
                            <img src="{{ asset('img/nom3.svg') }}" alt="">
                        </div>
                        <p class="text-base font-bold text-[#4A4A4A]">Rp75.000</p>
                    </div>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="inline text-right text-base">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#10A8E5"></path>
                    </svg>
                </div>
            </div>
            <!-- Nominal 100k -->
            <div onclick="window.location.href='/isi_doa/{{ $id }}/{{ Auth::id() }}/100000'"
                id="jml_100" class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-[30px] h-[30px] mr-3">
                            <img src="{{ asset('img/nom4.svg') }}" alt="">
                        </div>
                        <p class="text-base font-bold text-[#4A4A4A]">Rp100.000</p>
                    </div>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="inline text-right text-base">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z"
                            fill="#10A8E5"></path>
                    </svg>
                </div>
            </div>

            <form action="/isi_doa/{{ $id }}/{{ Auth::id() }}/">
                <div class="border rounded-md p-3">
                    <p class="my-[1em] text-[#272727] text-sm font-semibold">Nominal Donasi Lainnya</p>
                    <input
                        class="h-[52px] w-full rounded-md border-none border-coal bg-[#F2F3F4] py-[7.5px] pl-[1.9em] pr-[15px] text-right text-[1.5rem] font-bold focus:outline-none"
                        name="amount" placeholder="Rp" id="nominal" type="tel" value="Rp 0"
                        autocomplete="off">
                    <p class="my-[1em] text-[#989898] text-xs font-semibold">Min. donasi sebesar Rp 10.000</p>
                </div>

                <nav
                    class="bg-[#F7F7F7] fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full lg:max-w-lg lg:mx-auto py-2 px-[14px]">
                    <button type="submit"
                        class="bg-[#CB1552] text-white hover:bg-[#a60e41] font-bold text-base w-full h-full rounded-md">Lanjut
                        Pembayaran</button>
                </nav>
            </form>
        </div>
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

        $(document).ready(function() {
            $('form').submit(function(event) {
                event.preventDefault(); // prevent the form from submitting by default

                var inputVal = $('#nominal').val(); // get the value of the input
                var formAction = $(this).attr('action'); // get the current form action
                inputVal = Number(inputVal.replace(/[^0-9,-]+/g, "").replace(",",
                ".")); // get the number without Rp or period or space
                // append the input value to the form action
                var newAction = formAction + encodeURIComponent(inputVal);

                // set the new form action
                $(this).attr('action', newAction);

                // submit the form
                this.submit();
            });
        });
    </script>
</body>

</html>
