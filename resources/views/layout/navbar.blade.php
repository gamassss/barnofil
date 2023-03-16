    <!-- Navbar Start -->
    <nav class="bg-white fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full lg:max-w-lg lg:mx-auto">
			<div class="container grid grid-cols-4 gap-x-1 font-semibold items-center h-full text-xs">

					<!-- Home Navbar -->
					<div class="flex flex-row flex-wrap items-center justify-center">
							<img src="{{ asset(Request::is('/') ? 'img/home_navbar_active.svg' : 'img/home-navbar.svg') }}" alt="" class="w-8">
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
					<a href="/login" class="flex flex-row flex-wrap items-center justify-center">
							<img src="{{ asset('img/account-navbar.svg') }}" alt="" class="w-8">
							<p class="w-full text-center text-[10px] text-slate-400">Akun</p>
					</a>
			</div>
	</nav>
	<!-- Navbar End -->