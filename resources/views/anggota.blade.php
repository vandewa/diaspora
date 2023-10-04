@extends('layouts.front.app')
@section('content')
    <!-- section main content -->
    <section class="main-content mt-3">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">Form Anggota Komunitas</h3>
                        <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                    </div>
                    <!-- Contact Form -->
                    {{ Form::open(['route' => 'anggota.post', 'files' => true, 'id' => 'my-form']) }}

                    <div class="row">
                        <div class="column col-md-12">
                            <!-- Name input -->
                            <div class="form-group">
                                {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) }}
                            </div>
                        </div>
                        <div class="column col-md-12">
                            <!-- Name input -->
                            {{-- <div class="form-group">
                                {{ Form::select('asal_desa', region_cd(), null, ['class' => 'form-control js-example-basic
                                -single', 'placeholder' => 'Asal Desa']) }}
                            </div> --}}
                            <div class="form-group">
                                {{ Form::text('asal_desa', null, ['class' => 'form-control', 'placeholder' => 'Asal desa']) }}
                            </div>
                        </div>
                        <div class="column col-md-12">
                            <!-- Name input -->
                            <div class="form-group">
                                {{ Form::text('domisili', null, ['class' => 'form-control', 'placeholder' => 'Domisi saat ini']) }}
                            </div>
                        </div>
                        <div class="column col-md-12">
                            <!-- Name input -->
                            <div class="form-group">
                                {{ Form::text('profesi', null, ['class' => 'form-control', 'placeholder' => 'Masukkan profesi / keahlian']) }}
                            </div>
                        </div>
                        <div class="column col-md-12">
                            <!-- Name input -->
                            <div class="form-group">
                                {{ Form::number('no_hp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nomor hp']) }}
                                <small class="text-danger"><i>&nbsp; (*tidak akan dipublish)</i></small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Kirim</button><!-- Send Button -->

                    {{ Form::close() }}
                    <!-- Contact Form end -->
                </div>

                <div class="col-lg-4">
                    @include('sidebarkanan')
                </div>

            </div>

        </div>
    </section>
@endsection

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\AnggotaStoreValidation') !!}
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush

@push('css')
    <style>
        #ip2 {
            border-radius: 100px;
            border: 2px solid #609;
            padding: 20px;
            width: 200px;
            height: 15px;
        }
    </style>
@endpush
