<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <i class='bx bxs-leaf icon'></i>
            <div class="logo_name">Beri Arti</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <hr>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar-event'></i>
                    <span class="link_name">Program</span>
                </a>
                <span class="tooltip">Program</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-archive-in'></i>
                    <span class="link_name">Submission</span>
                </a>
                <span class="tooltip">Submission</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-wallet'></i>
                    <span class="link_name">Transaksi</span>
                </a>
                <span class="tooltip">Transaksi</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user'></i>
                    <span class="link_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <hr>
            <li>
                <a href="#">
                    <i class='bx bx-spreadsheet'></i>
                    <span class="link_name">Posts</span>
                </a>
                <span class="tooltip">Posts</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-list-ul'></i>
                    <span class="link_name">Categories</span>
                </a>
                <span class="tooltip">Categories</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user-pin'></i>
                    <span class="link_name">Authors</span>
                </a>
                <span class="tooltip">Authors</span>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <img src="{{ asset('img/profile.png') }}" alt="profile image">
                    <div class="profile_content">
                        <div class="name">Doddy</div>
                        <div class="designation">Admin</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>
		@yield('content')
    {{-- <section class="home-section">
        <div class="text">Dashboard</div>
    </section> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
