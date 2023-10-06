<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

                    <div class="collapse navbar-collapse justify-content-center centered-nav" id="menu-center">
                        <!-- menus -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#berandaSection">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kegiatanSection">Kegiatan Terkini</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#visimisiSection">Visi Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#programSection">Program Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontakSection">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#partnerSection">Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('anggota') }}">Anggota Komunitas Diaspora</a>
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
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <section id="kegiatanSection">
                        <div id="kegiatanSection">
                            <div class="section-header">
                                <h3 class="section-title">Proposal Kegiatan</h3>
                                <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">

                                @foreach ($kegiatan as $k)
                                    <div class="col-sm-6">
                                        <!-- post large -->
                                        <div class="post">
                                            <div class="thumb rounded">
                                                <a class="category-badge position-absolute">New</a>
                                                </span>
                                                <a href="blog-single.html">
                                                    <div class="inner">
                                                        @if ($k->video)
                                                            <video id="portfolio-vid" controls width="300"
                                                                height="250">
                                                                <source
                                                                    src="{{ asset('storage/kegiatan/' . $k->video->nama_file ?? '') }}"
                                                                    type="video/mp4">
                                                            </video>
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                            <ul class="meta list-inline mt-4 mb-0">
                                                <li class="list-inline-item">
                                                    <img src="{{ asset('a.png') }}" alt="author"
                                                        style="height: 20px;"class="mr-3" />
                                                    {{ $k->dibuat->name ?? '' }}
                                                </li>
                                                <li class="list-inline-item">
                                                    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($k->created_at))->isoFormat('D MMMM Y') }}
                                                </li>
                                            </ul>
                                            <h5 class="post-title mb-3 mt-3"><a
                                                    href="{{ route('detail.kegiatan', $k->slug) }}">{{ $k->judul }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- load more button -->
                            <div class="text-center mt-4">
                                <a href="{{ route('kegiatannya.list') }}" class="btn btn-simple">Lihat
                                    Selengkapnya</a>
                            </div>

                        </div>
                    </section>


                    <div id="de"></div>
                    <div class="section-header mt-5">
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
                                                    <img src="{{ asset('a.png') }}" alt="author"
                                                        style="height: 20px;"class="mr-3" />
                                                    {{ $b->dibuat->name ?? '' }}
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
                                                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a
                                                                href="https://twitter.com/intent/tweet?url={{ url('/news/' . $b->slug) }}"
                                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                                        </li>

                                                        <li class="list-inline-item"><a
                                                                href="https://api.whatsapp.com/send?text={{ url('/news/' . $b->slug) }}"
                                                                target="_blank"><i class="fab fa-whatsapp"></i></a>
                                                        </li>

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
                        <div class="text-center">
                            <a href="{{ route('news.list') }}" class="btn btn-simple">Lihat Selengkapnya</a>
                        </div>
                        {{-- {{ $berita->links('vendor.pagination.simple-default') }} --}}

                    </div>
                </div>

                <div class="col-lg-4">

                    <section id="visimisiSection">
                        @include('sidebarkanan')
                    </section>

                </div>
            </div>

        </div>


        <!-- section main content -->
        <section id="programSection" class="mt-5">
            <div class="container-xl">
                <div class="section-header">
                    <h3 class="section-title">Program Kerja</h3>
                    <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                </div>

                <div class="padding-30 rounded bordered">
                    <div class="row gy-5">
                        <div class="col-sm-6">
                            <h5>Bidang Kesekretariatan :</h5>
                            1. Pendataan semua Diaspora yang tersebar diseluruh dunia<br>
                            2. Melengkapi semua kebutuhan kesekretaritan<br>
                            3. Membangun Website dan aplikasi<br>
                            4. Membuka kantor cabang baru disemua kota yang dipandang perlu<br>
                            5. Memperkuat jejaring dengan semua komunitas warga Wonosobo yang
                            tersebar diseluruh dunia<br>
                            6. Pendataan potensi kolaborasi dan jejaring untuk membantu Program
                            Pemkab Wonosobo dan Warga Wonosobo
                        </div>
                        <div class="col-sm-6">
                            <h5>Bidang Sosial :</h5>
                            1. Menyelenggarakan Pelatihan Life Skill ,dan peningkatan kapasitas warga
                            masyarakat di Kabupaten Wonosobo<br>
                            2. pelatihan-pelatihan keterampilan untuk life skill bagi warga kurang mampu, disabilitas
                            dan kaum marginal<br>
                            3. Membangun lembaga pendidikan;<br>
                            4. Melaksanakan pengobatan gratis;<br>
                            5. Melakukan penelitian dan studi di bidang ilmu pengetahuan
                        </div>
                        <div class="col-sm-6">
                            <h5>Bidang Kesehatan :</h5>
                            1. Membantu mengatasi masalah stunting<br>
                            2. Edukasi Hidup Sehat<br>
                            3. Membangun layanan kesehatan<br>
                            4. Membantu penguatan PIK Remaja, Posyandu, Desa Siaga dan sejenisnya<br>
                            5. Membantu edukasi pendidikan pra nikah<br>
                            6. Memberikan edukasi makanan sehat
                        </div>
                        <div class="col-sm-6">
                            <h5>Bidang Ekonomi :</h5>
                            1. Membangun usaha ekonomi dengan memanfaatkan potensi lokal<br>
                            2. Mematangkan konsep Blue Ekonomi<br>
                            3. Penyediaan saprodi tepat guna dan murah untuk pertanian<br>
                            4. Membuka peluang pasar produk local Wonosobo dengan jejaring diaspora
                            diseluruh dunia<br>
                            5. Menguatkan jejaring persatuan antar diaspora diberbagai wilayah
                        </div>
                        <div class="col-sm-6">
                            <h5>Bidang Kemanusiaan :</h5>
                            1. Memberikan bantuan kepada korban bencana alam;<br>
                            2. Memberikan bantuan kepada kaum marginal di Kabupaten Wonosobo;<br>
                            3. Mendirikan rumah shelter ;<br>
                            4. Memberikan bantuan , ide, gagasan dan pendanaan untuk mengatasi
                            masalah stunting, kesehatan, pendidikan , sanitasi, air bersih dan program
                            lain yang menjadi prioritas kabupaten Wonosobo<br>
                            5. Memberikan advokasi dan bantuan hukum bagi diaspora yang bersinggungan
                            dengan masalah hukum;<br>
                            6. Membantu diaspora yang terkena masalah di tempat kerja dan perantauan<br>
                            7. Membantu Kabupaten Wonosobo dalam mengatasi masalah kemiskinan
                            Ektreme
                        </div>
                        <div class="col-sm-6">
                            <h5>Bidang Lingkungan Hidup :</h5>
                            1. Melestarikan lingkungan hidup.<br>
                            2. Kerjasama membangun bank sampah<br>
                            3. Melakukan upaya pemasarakata tanaman organic<br>
                            4. Pembuatan alat pemusnah sampah<br>
                            5. Kerjasama memanfaaatkan lahan kritis menjadi produktif<br>
                            6. Melakukan penelitian, kajian/studi di bidang lingkungan hidup<br>
                            7. Melakukan upaya pelestarian mata air, penyelamatan sungai, satwa dan
                            aneka flora asli Wonosobo<br>
                            8. Melakukan edukasi konservasi lingkungan<br>
                            9. Melakukan Kerjasama dengan berbagi pihak dalam upaya konservasi
                            lingkungan
                        </div>
                        <div class="col-sm-6">
                            <h5>Advokasi dan Pemberdayaan :</h5>
                            1. Membantu memperjuangkan hak dan kepentingan warga diaspora melalui
                            advokasi kebijakan baik di kota/ negara asal maupun negara tujuan, dengan
                            bekerja sama dengan organisasi hak asasi manusia, kelompok advokasi, atau
                            pihak berwenang terkait.<br>
                            2. Menyelenggarakan program pemberdayaan yang mencakup pelatihan
                            kepemimpinan, pembangunan kapasitas, dan pemahaman hak asasi manusia
                            bagi perantau.<br>
                            3. Menggalang dukungan dan dana untuk memberikan bantuan keuangan atau
                            beasiswa kepada perantau yang membutuhkan, terutama dalam situasi darurat
                            atau krisis.

                        </div>
                        <div class="col-sm-6">
                            <h5>Penghargaan dan Prestasi :</h5>
                            1. Mengadakan penghargaan tahunan untuk mengakui kontribusi dan prestasi
                            Diaspora yang luar biasa dalam berbagai bidang, seperti bisnis, akademik,
                            sosial, seni budaya dan kontribusi untuk Kabupaten Wonosobo.<br>
                            2. Menyelenggarakan program beasiswa atau hibah untuk mendukung
                            pendidikan atau proyek inovatif yang dilakukan oleh perantau.<br>
                            3. Mengadakan acara atau festival budaya untuk mempromosikan dan
                            mempertahankan identitas budaya para diaspora Wonosobo<br>
                            4. Memberikan panggung penghormatan bagi diaspora bintang Lima yang punya
                            andil terbaik dalam kolaborasi dan membantu Warga Wonosobo
                        </div>

                        <div class="col-sm-6">
                            <h5>Bidang Kehumasan</h5>
                            1. Membuat pusat informasi online yang menyediakan berbagai sumber daya
                            penting untuk perantau, seperti panduan kebijakan imigrasi, informasi
                            kesehatan, saran finansial, dan lainnya.<br>
                            2. Menyelenggarakan sesi konsultasi online dengan ahli di berbagai bidang,
                            seperti hukum, keuangan, dan kesehatan, untuk memberikan bantuan dan
                            saran kepada perantau.<br>
                            3. Mengadakan pertemuan reguler atau forum diskusi online untuk memfasilitasi
                            pertukaran pengalaman dan pengetahuan antara perantau<br>
                            4. Mendirikan komunitas online yang memungkinkan para perantau saling
                            terhubung dan berbagi informasi serta peluang kolaborasi.<br>
                            5. Mengadakan acara jaringan secara rutin, baik online maupun offline, untuk
                            memfasilitasi pertemuan antara perantau dengan pelaku bisnis, tokoh
                            masyarakat, atau pemangku kepentingan lainnya di kota/ negara asal.<br>
                            6. Membangun kerjasama dengan lembaga atau organisasi lokal di kota
                            /negara asal yang mendukung pengembangan perantau, seperti kamar
                            dagang, lembaga pemerintah, atau perguruan tinggi.
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section id="partnerSection">
            <!-- instagram feed -->
            <div class="instagram">
                <div class="container-xl">
                    <div class="section-header">
                        <h3 class="section-title">Partners</h3>
                        <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                    </div>
                    <!-- button -->
                    <div class="instagram-feed d-flex flex-wrap">
                        @foreach ($partner as $p)
                            <div class="insta-item col-sm-2 col-6 col-md-2" style="margin-right:20px;">
                                <a href="{{ $p->url }}" target="_blank">
                                    <img src="{{ $p->preview_image }}" class="d-block w-100"
                                        style="max-height: 300px;" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="kontakSection" class="mt-5">
            <div class="container-xl">
                <div class="section-header">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil!',
                'Data terkirim.',
                'success'
            )
        }

        @if (session('store'))
            sweetAlert();
        @endif
    </script>
    <script>
        $(window).scroll(function() {
            var windscroll = $(window).scrollTop();
            if (windscroll >= 100) {
                $('section').each(function(i) {
                    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
                    if ($(this).position().top <= windscroll - 0) {
                        $('nav li.active').removeClass('active');
                        $('nav li').eq(i).addClass('active');
                    }
                });

            } else {

                $('nav li.active').removeClass('active');
                $('nav li:first').addClass('active');
            }

        }).scroll();
    </script>
    {{-- <script>
        document.getElementById("portfolio-vid").addEventListener("mouseover", function() {
            this.play();
        });

        document.getElementById("portfolio-vid").addEventListener("mouseleave", function() {
            this.pause();
        });
    </script> --}}
</body>

</html>
