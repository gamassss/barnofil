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
            <form action="/payment" method="get" onclick="submit(this)" id="jml_30" class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
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
										<input type="hidden" name="total_dana" value="30000">
										<input type="hidden" name="name" value="{{ $username }}">
										<input type="hidden" name="user_id" value="{{ $user_id }}">
										<input type="hidden" name="program_id" value="{{ $id }}">
										<input type="hidden" name="email" value="{{ $user_email }}">
                </div>
            </form>
            <!-- Nominal 50k -->
            <form action="/payment" method="get" onclick="submit(this)" id="jml_30" class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
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
										<input type="hidden" name="total_dana" value="50000">
										<input type="hidden" name="name" value="{{ $username }}">
										<input type="hidden" name="user_id" value="{{ $user_id }}">
										<input type="hidden" name="program_id" value="{{ $id }}">
										<input type="hidden" name="email" value="{{ $user_email }}">
                </div>
            </form>
            <!-- Nominal 75k -->
            <form action="/payment" method="get" onclick="submit(this)" id="jml_30" class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
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
										<input type="hidden" name="total_dana" value="75000">
										<input type="hidden" name="name" value="{{ $username }}">
										<input type="hidden" name="user_id" value="{{ $user_id }}">
										<input type="hidden" name="program_id" value="{{ $id }}">
										<input type="hidden" name="email" value="{{ $user_email }}">
                </div>
            </form>
            <!-- Nominal 75k -->
            <form action="/payment" method="get" onclick="submit(this)" id="jml_30" class="my-4 p-4 rounded-md shadow-lg hover:shadow-xl">
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
										<input type="hidden" name="total_dana" value="100000">
										<input type="hidden" name="name" value="{{ $username }}">
										<input type="hidden" name="user_id" value="{{ $user_id }}">
										<input type="hidden" name="program_id" value="{{ $id }}">
										<input type="hidden" name="email" value="{{ $user_email }}">
                </div>
            </form>

            <nav
                class="bg-[#F7F7F7] fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full lg:max-w-lg lg:mx-auto py-2 px-[14px]">
                <button onclick="window.location.href='/amount/{{ $id }}'"
                    class="bg-[#CB1552] text-white hover:bg-[#a60e41] font-bold text-base w-full h-full rounded-md">Lanjut
                    Pembayaran</button>
            </nav>
        </div>
    </section>

		<script>
			// $(document).ready(function () {
			// 	function submit(element) {
			// 		let form = $(element).html();
			// 		console.log(form)
			// 	}
			// });
		</script>
</body>

</html>
