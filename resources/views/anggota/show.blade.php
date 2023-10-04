@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Anggota Komunitas</h3>
                            </div>
                            <div class="card-body">
                                {{ Form::model($data) }}
                                <div class="form-group">
                                    <label>Nama</label>
                                    {{ Form::text('nama', null, ['class' => 'form-control ', 'readonly' => true]) }}
                                </div>
                                <div class="form-group">
                                    <label>Asal Desa</label>
                                    {{ Form::text('asal_desa', null, ['class' => 'form-control', 'placeholder' => 'Asal desa', 'readonly' => true]) }}
                                </div>
                                <div class="form-group">
                                    <label>Domisili</label>
                                    {{ Form::text('domisili', null, ['class' => 'form-control', 'placeholder' => 'Domisi saat ini', 'readonly' => true]) }}
                                </div>
                                <div class="form-group">
                                    <label>Profesi</label>
                                    {{ Form::text('profesi', null, ['class' => 'form-control', 'placeholder' => 'Masukkan profesi / keahlian', 'readonly' => true]) }}
                                </div>
                                <div class="form-group">
                                    <label>Nomor Hp</label>
                                    {{ Form::number('no_hp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nomor hp', 'readonly' => true]) }}
                                </div>
                                <a type="button" class="btn btn-default" href="{{ route('anggota.index') }}">Kembali</a>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
