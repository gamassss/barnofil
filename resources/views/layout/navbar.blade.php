    <!-- Navbar Start -->
    <nav class="bg-white fixed bottom-0 left-0 right-0 h-16 border-t-2 w-full lg:max-w-lg lg:mx-auto">
        <div class="container grid grid-cols-4 gap-x-1 font-semibold items-center h-full text-xs">

            <!-- Home Navbar -->
            <a href="/" class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset(Request::is('/') ? 'img/icons/navigation/home_navbar_active.svg' : 'img/icons/navigation/home-navbar.svg') }}"
                    alt="" class="w-8">
                <p class="w-full text-center text-[10px] {{ Request::is('/') ? 'text-primer' : 'text-[#A8A8A8]' }}">
                    Donasi</p>
            </a>

            <!-- Galang Dana Navbar -->
            <div class="flex flex-col flex-wrap items-center justify-center">
                <img src="{{ asset('img/icons/navigation/galang-navbar.svg') }}" alt="" class="w-8">
                <p class="text-center text-[10px] text-[#A8A8A8]">Galang Dana</p>
            </div>

            <!-- Donasi Navbar -->
            <div class="flex flex-col flex-wrap items-center justify-center">
                <img src="{{ asset('img/icons/navigation/donasi-navbar.svg') }}" alt="" class="w-8">
                <p class="text-[10px] text-[#A8A8A8]">Donasi Saya</p>
            </div>
            <!-- Account Navbar -->
            <a href="/user" class="flex flex-row flex-wrap items-center justify-center">
                <img src="{{ asset(Request::is('user') ? 'img/icons/navigation/account_navbar_active.svg' : 'img/icons/navigation/account-navbar.svg') }}"
                    alt="" class="w-8">
                <p class="w-full text-center text-[10px] {{ Request::is('/user') ? 'text-primer' : 'text-[#A8A8A8]' }}">
                    Akun</p>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
