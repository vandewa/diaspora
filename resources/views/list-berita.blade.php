@extends('layouts.front.app')
@section('content')
    <!-- section main content -->
    <section class="main-content mt-3">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="rounded padding-30 bordered">

                        <div class="de"></div>
                        <div class="row" id="pagenya">
                            @foreach ($data as $b)
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
                                                                target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li class="list-inline-item"><a
                                                                href="https://twitter.com/intent/tweet?url={{ url('/news/' . $b->slug) }}"
                                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                                        </li>

                                                        <li class="list-inline-item"><a
                                                                href="https://api.whatsapp.com/send?text={{ url('/news/' . $b->slug) }}"
                                                                target="_blank"><i class="fab fa-whatsapp"></i></a></li>

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
                        {{ $data->links('vendor.pagination.simple-default') }}

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
