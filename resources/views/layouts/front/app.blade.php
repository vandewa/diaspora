<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
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
        <header class="header-personal light">
            <div class="container-xl header-top">
                <div class="row align-items-center">

                    <div class="col-4 d-none d-md-block d-lg-block">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                        <!-- site logo -->
                        <a class="navbar-brand" href="personal-alt.html"><img src="{{ asset('a.png') }}" alt="logo"
                                width="90" /></a>
                        <a href="personal-alt.html" class="d-block text-logo">Diaspora<span class="dot">.</span></a>
                        <span class="slogan d-block">Yayasan Diaspora Wonosobo</span>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <!-- header buttons -->
                        <div class="header-buttons float-md-end mt-4 mt-md-0">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button ms-2 float-end float-md-none">
                                <span class="burger-icon"></span>
                            </button>
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
                                <a class="nav-link" href="category.html">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Visi Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Kontak</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <!-- section hero -->
        <section class="hero data-bg-image d-flex align-items-center" data-bg-image="images/other/hero.jpg">
            <div class="container-xl">
                <!-- call to action -->
                <div class="cta text-center">
                    <h2 class="mt-0 mb-4">Yayasan Diaspora Wonosobo</h2>
                    <p class="mt-0 mb-4">Wadah perantau Wonosobo yang tersebar di luar kota, luar pulau dan luar negeri,
                        sebagai wadah pemersatu untuk saling berinteraksi,saling asah, asih, asuh dan saling melindungi
                        yang terlembagakan dengan tujuan untuk memperkuat persatuan dan berperan secara kolaboratif
                        dalam membangun Wonosobo.</p>
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

                            <div class="row">

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('katen/images/posts/latest-sm-1.jpg') }}"
                                                        alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="{{ asset('katen/images/other/author-sm.png') }}"
                                                            class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Trending</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">The Next 60 Things To
                                                    Immediately Do About Building</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('katen/images/posts/latest-sm-2.jpg') }}"
                                                        alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="{{ asset('katen/images/other/author-sm.png') }}"
                                                            class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Lifestyle</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">Master The Art Of Nature
                                                    With These 7 Tips</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <span class="post-format-sm">
                                                <i class="icon-camrecorder"></i>
                                            </span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('katen/images/posts/latest-sm-3.jpg') }}"
                                                        alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="{{ asset('katen/images/other/author-sm.png') }}"
                                                            class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Fashion</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">Facts About Business
                                                    That Will Help You Success</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <!-- post -->
                                    <div class="clearfix post post-list">
                                        <div class="rounded thumb">
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="{{ asset('katen/images/posts/latest-sm-4.jpg') }}"
                                                        alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="mb-3 meta list-inline">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="{{ asset('katen/images/other/author-sm.png') }}"
                                                            class="author" alt="author" />Katen Doe</a></li>
                                                <li class="list-inline-item"><a href="#">Politic</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title"><a href="blog-single.html">Your Light Is About To
                                                    Stop Being Relevant</a></h5>
                                            <p class="mb-0 excerpt">A wonderful serenity has taken possession of my
                                                entire soul, like these sweet mornings</p>
                                            <div class="clearfix post-bottom d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="mb-0 icons list-unstyled list-inline">
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-pinterest"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="fab fa-telegram-plane"></i></a></li>
                                                        <li class="list-inline-item"><a href="#"><i
                                                                    class="far fa-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="blog-single.html"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- load more button -->
                            <div class="text-center">
                                <button class="btn btn-simple">Load More</button>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="rounded widget">
                                <div class="text-center widget-about data-bg-image"
                                    data-bg-image="{{ asset('katen/images/map-bg.png') }}">
                                    <img src="{{ asset('katen/images/logo.svg') }}" alt="logo" class="mb-4" />
                                    <p class="mb-4">Terwujudnya Wonosobo yang maju, sejahtera dan memiliki daya
                                        saing
                                        tinggi melalui peran diaspora </p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Misi Diaspora Wonosobo
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
                                            <div class="carousel-item active">
                                                <center>
                                                    <h5>Ketua</h5>
                                                </center>
                                                <img src="{{ asset('a.png') }}" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <span class="badge bg-primary"
                                                        style="font-size: 15px;">Farid</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('a.png') }}" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Tyovan Ari</h5>
                                                    <p>Ketua Umum</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('a.png') }}" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Third slide label</h5>
                                                    <p>Some representative placeholder content for the third slide.</p>
                                                </div>
                                            </div>
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

        <!-- instagram feed -->
        <div class="instagram" id="aboutSection">
            <div class="container-xl">
                <!-- button -->
                <a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
                <!-- images -->
                <div class="flex-wrap instagram-feed d-flex">
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{ asset('katen/images/insta/insta-1.jpg') }}" alt="insta-title" />
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{ asset('katen/images/insta/insta-2.jpg') }}" alt="insta-title" />
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{ asset('katen/images/insta/insta-3.jpg') }}" alt="insta-title" />
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{ asset('katen/images/insta/insta-4.jpg') }}" alt="insta-title" />
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{ asset('katen/images/insta/insta-5.jpg') }}" alt="insta-title" />
                        </a>
                    </div>
                    <div class="insta-item col-sm-2 col-6 col-md-2">
                        <a href="#">
                            <img src="{{ asset('katen/images/insta/insta-6.jpg') }}" alt="insta-title" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <!-- copyright text -->
                        <div class="col-md-4">
                            <span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
                        </div>

                        <!-- social icons -->
                        <div class="text-center col-md-4">
                            <ul class="mb-0 social-icons list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>

                        <!-- go to top button -->
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end"><i
                                    class="icon-arrow-up"></i>Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mt-0 mb-4">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('katen/images/logo.svg') }}" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="index.html">Magazine</a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="personal-alt.html">Personal Alt</a></li>
                        <li><a href="minimal.html">Minimal</a></li>
                        <li><a href="classic.html">Classic</a></li>
                    </ul>
                </li>
                <li><a href="category.html">Lifestyle</a></li>
                <li><a href="category.html">Inspiration</a></li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="category.html">Category</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="blog-single-alt.html">Blog Single Alt</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="mt-auto mb-0 social-icons list-unstyled list-inline w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

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
                    ...
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

</body>

</html>
