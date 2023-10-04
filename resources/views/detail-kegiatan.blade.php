@extends('layouts.front.app')
@section('content')
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
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @if ($data->video)
                                    <video id="portfolio-vid" controls width="1920" height="420">
                                        <source src="{{ asset('storage/kegiatan/' . $data->video->nama_file) }}"
                                            type="video/mp4">
                                    </video>
                                @endif
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="post-content clearfix mt-3">
                            {!! $data->isi_berita !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    @include('sidebarkanan')

                </div>

            </div>

        </div>

        </div>
    </section>
@endsection
