@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(['route' => ['kegiatan.store'], 'files' => true]) }}
                        @include('kegiatan.form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        const judul_posting = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/kegiatan/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>
@endpush
