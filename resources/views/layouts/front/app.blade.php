<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Diaspora Wonosobo</title>
    <meta name="description" content="Diaspora Wonosobo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon_io/favicon.ico') }}">


    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('katen/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @stack('css')

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        * {
            margin: 0px;
            padding: 0;
            box-sizing: border-box;
        }

        div.wrapper {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            min-width: 80px;
            min-height: 80px;
            /* background-color: #37c97b; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        div.rect {
            position: absolute;
            width: 70px;
            height: 70px;
            border: 2px solid white;
            border-radius: 5px;
            transform: rotate(calc(var(--i) * 105deg)) scale(0);
            animation: scale 1s ease-in-out calc(var(--i) * 0.5s) infinite alternate;
            box-shadow: 1px 1px 10px rgba(1, 9, 8, 0.479);
        }

        @keyframes scale {
            from {
                transform: scale(0) rotate(calc(var(--i) * 35deg));
            }

            to {
                transform: scale(1) rotate(calc(var(--i) * 35deg));
                ;
            }
        }
    </style>
    @vite([])

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div style='--i : 1; background-color : tomato' class="rect"></div>
            <div style='--i : 2; background-color : #5037c9' class="rect"></div>
            <div style='--i : 3; background-color : #1ae2ac' class="rect"></div>
            <div style='--i : 4; background-color : #e29f1a' class="rect"></div>
            <div style='--i : 5; background-color : #e21ab9' class="rect"></div>
            <div style='--i : 6; background-color : #c395bf' class="rect"></div>
            <div style='--i : 7; background-color : #4032bb' class="rect"></div>
            <div style='--i : 8; background-color : #0fe0b7' class="rect"></div>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        <!-- header -->
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- site logo -->
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('a.png') }}" alt="logo"
                            style="height: 50px;" /></a>

                    <div class="collapse navbar-collapse">
                        <!-- menus -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Kegiatan Terkini</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Visi Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Program Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Partners</a>
                            </li>
                            <li class="nav-item @if (Request::segment(1) == 'anggota-komunitas') active @endif">
                                <a class="nav-link" href="{{ route('anggota') }}">Anggota Komunitas</a>
                            </li>
                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">
                        <div class="header-buttons">
                            <a class="search icon-button" href="{{ url('login') }}">
                                <i class="icon-user"></i>
                            </a>
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')
        <!-- footer -->
        @include('home.footer')

    </div><!-- end site wrapper -->

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('a.png') }}" alt="Katen" style="max-height: 50px;" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li @if (Request::segment(1) == 'news') class="active" @endif><a href="{{ route('index') }}">Beranda</a>
                </li>
                <li><a href="{{ route('index') }}">Kegiatan Terkini</a></li>
                <li><a href="{{ route('index') }}">Visi Misi</a></li>
                <li><a href="{{ route('index') }}">Program Kerja</a></li>
                <li><a href="{{ route('index') }}">Kontak</a></li>
                <li><a href="{{ route('index') }}">Partners</a></li>
                <li @if (Request::segment(1) == 'anggota-komunitas') class="active" @endif><a href="{{ route('anggota') }}">Anggota
                        Komunitas Diaspora</a></li>
            </ul>
        </nav>
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('katen/js/jquery.min.js') }}"></script>
    <script src="{{ asset('katen/js/popper.min.js') }}"></script>
    <script src="{{ asset('katen/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('katen/js/slick.min.js') }}"></script>
    <script src="{{ asset('katen/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('katen/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil!',
                'Menambahkan data.',
                'success'
            )
        }

        @if (session('store'))
            sweetAlert();
        @endif
    </script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk mendapatkan nilai dari parameter 'page' dalam URL
            function getPageParameter() {
                var urlParams = new URLSearchParams(window.location.search);
                return urlParams.get('page');
            }

            // Menggunakan fungsi getPageParameter untuk mendapatkan nilai parameter 'page'
            var pageValue = getPageParameter();

            // Mengecek jika parameter 'page' ada dan memiliki nilai
            if (pageValue !== null) {
                window.onload = function() {
                    var el = document.getElementById('de');
                    el.scrollIntoView(true);
                }
                // Lakukan tindakan lain sesuai kebutuhan di sini
            }

        });
    </script>
    @stack('js')

</body>

</html>
