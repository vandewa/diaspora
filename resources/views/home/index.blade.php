<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <header class="header-personal light">
            <div class="container-xl header-top">
                <div class="row align-items-center">

                    <div class="col-4 d-none d-md-block d-lg-block">
                        <!-- social icons -->
                        <ul class="mb-0 social-icons list-unstyled list-inline">
                            <li class="list-inline-item"><a href="{{ $data->fb ?? '' }}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $data->twitter ?? '' }}" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $data->ig ?? '' }}" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $data->yt ?? '' }}" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="text-center col-md-4 col-sm-12 col-xs-12">
                        <!-- site logo -->
                        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('a.png') }}"
                                alt="logo" width="90" /></a>
                        <a href="{{ route('index') }}" class="d-block text-logo">Diaspora<span
                                class="dot">.</span></a>
                        <span class="slogan d-block">Yayasan Diaspora Wonosobo</span>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <!-- header buttons -->
                        <div class="mt-4 header-buttons float-md-end mt-md-0">
                            <a class="search icon-button" href="{{ url('login') }}">
                                <i class="icon-user"></i>
                            </a>
                            {{-- <button class="burger-menu icon-button ms-2 float-end float-md-none">
                                <span class="burger-icon"></span>
                            </button> --}}
                        </div>
                    </div>

                </div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">

                    <div class="collapse navbar-collapse justify-content-center centered-nav">
                        <!-- menus -->
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#berandaSection">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#visimisiSection">Visi Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontakSection">Kontak</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <!-- section hero -->
        <section class="hero data-bg-image d-flex align-items-center" data-bg-image="images/other/hero.jpg"
            id="berandaSection">
            <div class="container-xl">
                <!-- call to action -->
                <div class="text-center cta">
                    <h2 class="mt-0 mb-4">Yayasan Diaspora Wonosobo</h2>
                    <p class="mt-0 mb-4">{{ $data->deskripsi ?? '' }}</p>
                </div>
            </div>
            <!-- animated mouse wheel -->
            <span class="mouse">
                <span class="wheel"></span>
            </span>
            <!-- wave svg -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260">
                <path fill="#FFF" fill-opacity="1"
                    d="M0,256L60,245.3C120,235,240,213,360,218.7C480,224,600,256,720,245.3C840,235,960,181,1080,176C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>

        </section>

        <!-- section main content -->
        <div id="de"></div>
        <section class="main-content">
            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Berita</h3>
                            <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                        </div>

                        <div class="rounded padding-30 bordered">

                            <div class="row" id="pagenya">
                                @foreach ($berita as $b)
                                    <div class="col-md-12 col-sm-6">
                                        <!-- post -->
                                        <div class="clearfix post post-list">
                                            <div class="rounded thumb">
                                                <span class="post-format-sm">
                                                    <i class="icon-picture"></i>
                                                </span>
                                                <a href="{{ route('detail.berita', $b->slug) }}">
                                                    <div class="inner">
                                                        <img src="{{ asset($b->sampul->preview_image ?? '') }}"
                                                            alt="post-title"style="height:100%;width:100%;object-fit:cover" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="details">
                                                <ul class="mb-3 meta list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#">
                                                            <img src="{{ asset('a.png') }}" alt="author"
                                                                style="height: 20px;"class="mr-3" />
                                                            {{ $b->dibuat->name ?? '' }}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($b->created_at))->isoFormat('D MMMM Y') }}
                                                    </li>
                                                </ul>
                                                <h5 class="post-title"><a
                                                        href="{{ route('detail.berita', $b->slug) }}">{{ $b->judul ?? '' }}</a>
                                                </h5>
                                                <div class="clearfix post-bottom d-flex align-items-center">
                                                    <div class="social-share me-auto">
                                                        <button class="toggle-button icon-share"></button>
                                                        <ul class="mb-0 icons list-unstyled list-inline">
                                                            <li class="list-inline-item"><a
                                                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url('/news/' . $b->slug) }}"
                                                                    target="_blank"><i
                                                                        class="fab fa-facebook-f"></i></a></li>
                                                            <li class="list-inline-item"><a
                                                                    href="https://twitter.com/intent/tweet?url={{ url('/news/' . $b->slug) }}"
                                                                    target="_blank"><i class="fab fa-twitter"></i></a>
                                                            </li>

                                                            <li class="list-inline-item"><a
                                                                    href="https://api.whatsapp.com/send?text={{ url('/news/' . $b->slug) }}"
                                                                    target="_blank"><i
                                                                        class="fab fa-whatsapp"></i></a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="more-button float-end">
                                                        <a href="{{ route('detail.berita', $b->slug) }}"><span
                                                                class="icon-options"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- load more button -->
                            {{-- <div class="text-center">
                                <button class="btn btn-simple">Load More</button>
                            </div> --}}
                            {{ $berita->links() }}

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
                                    <p class="mb-4">{{ $data->visi ?? '' }}</p>
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

        <!-- section main content -->
        <section class="main-content">
            <div class="container-xl">
                <div class="section-header" id="kontakSection">
                    <h3 class="section-title">Kontak</h3>
                    <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <!-- contact info item -->
                        <div class="rounded contact-item bordered d-flex align-items-center">
                            <span class="icon icon-phone"></span>
                            <div class="details">
                                <h3 class="mt-0 mb-0">Telepon</h3>
                                <p class="mb-0">{{ $data->telepon ?? '' }}</p>
                            </div>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-4">
                        <!-- contact info item -->
                        <div class="rounded contact-item bordered d-flex align-items-center">
                            <span class="icon icon-envelope-open"></span>
                            <div class="details">
                                <h3 class="mt-0 mb-0">E-Mail</h3>
                                <p class="mb-0">{{ $data->email ?? '' }}</p>
                            </div>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-4">
                        <!-- contact info item -->
                        <div class="rounded contact-item bordered d-flex align-items-center">
                            <span class="icon icon-map"></span>
                            <div class="details">
                                <h3 class="mt-0 mb-0">Alamat</h3>
                                <p class="mb-0">{{ $data->alamat ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="spacer" data-height="50"></div>

            </div>
        </section>

        <!-- footer -->
        @include('home.footer')

    </div><!-- end site wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Misi Dispora Wonosobo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! $data->misi ?? '' !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('katen/js/jquery.min.js') }}"></script>
    <script src="{{ asset('katen/js/popper.min.js') }}"></script>
    <script src="{{ asset('katen/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('katen/js/slick.min.js') }}"></script>
    <script src="{{ asset('katen/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('katen/js/custom.js') }}"></script>
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
</body>

</html>
