<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Diaspora Wonosobo</title>
    <meta name="description" content="Diaspora Wonosobo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('katen/images/favicon.png') }}">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('katen/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('katen/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @vite([])

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Visi Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="{{ $informasi->fb ?? '' }}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $informasi->twitter ?? '' }}" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $informasi->ig ?? '' }}" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $informasi->yt ?? '' }}" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                        <!-- header buttons -->
                        <div class="header-buttons">
                            <a class="search icon-button" href="{{ url('login') }}">
                                <i class="icon-user"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- section main content -->
        <section class="main-content mt-3">
            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <!-- post single -->
                        <div class="post post-single">
                            <!-- post header -->
                            <div class="post-header">
                                <h1 class="title mt-0 mb-3">{{ $data->judul }}</h1>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item"><a href="#">
                                            <img src="{{ asset('a.png') }}" alt="author"
                                                style="height: 20px;"class="mr-3" />
                                            {{ $b->dibuat->name ?? '' }}
                                        </a></li>
                                    <li class="list-inline-item"><a href="#">Trending</a></li>
                                    <li class="list-inline-item">
                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('D MMMM Y') }}
                                    </li>
                                </ul>
                            </div>
                            <!-- featured image -->
                            {{-- <div class="featured-image">
                                <img src="images/posts/featured-lg.jpg" alt="post-title" />
                            </div> --}}
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($data->foto as $list)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($list->preview_image ?? '') }}" alt="image"
                                                style="height: 100%; border-top-left-radius: 25px; border-top-right-radius: 25px;" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- post content -->
                            <div class="post-content clearfix mt-3">
                                {!! $data->isi_berita !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="rounded widget" id="visimisiSection">
                                <div class="text-center widget-about data-bg-image"
                                    data-bg-image="{{ asset('katen/images/map-bg.png') }}">
                                    {{-- <img src="{{ asset('katen/images/logo.svg') }}" alt="logo" class="mb-4" /> --}}
                                    <h4>Visi Diaspora<span class="dot">.</span></h4>
                                    <p class="mb-4">{{ $informasi->visi ?? '' }}</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Misi Diaspora
                                    </button>
                                </div>
                            </div>

                            <!-- widget post carousel -->
                            <div class="rounded widget">
                                <div class="text-center widget-header">
                                    <h3 class="widget-title">Pendiri Yayasan Diaspora Wonosobo</h3>
                                    <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            @foreach ($pendiri as $index => $list)
                                                <div
                                                    class="carousel-item @if ($index == 0) active @endif">
                                                    <center>
                                                        <h5>{{ $list->jabatan ?? '' }}</h5>
                                                    </center>
                                                    <img src="{{ $list->preview_image }}" class="d-block w-100"
                                                        style="max-height: 300px;">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <span class="badge bg-danger"
                                                            style="font-size: 15px;">{{ $list->nama ?? '' }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- footer -->
        @include('home.footer')

    </div><!-- end site wrapper -->

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('katen/js/jquery.min.js') }}"></script>
    <script src="{{ asset('katen/js/popper.min.js') }}"></script>
    <script src="{{ asset('katen/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('katen/js/slick.min.js') }}"></script>
    <script src="{{ asset('katen/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('katen/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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


</body>

</html>
