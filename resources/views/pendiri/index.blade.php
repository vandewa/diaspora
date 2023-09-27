@extends('layouts/app')

@section('content')
    @if (session('status'))
        <div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            {{ session('status') }}
        </div>
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('pendiri.create') }}" type="button" class="btn btn-md btn-primary"> <i
                                    class="nav-icon fas fa-plus-square mr-3"></i>Add Data</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- Content area -->
                        <div class="card mt-3">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="devan" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        var table = $('#devan').DataTable({
            processing: true,
            serverSide: true,
            dom: 'lrt',
            // responsive: true,
            ajax: window.location.href,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'nama',
                    name: 'nama',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'jabatan',
                    name: 'jabatan',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: "text-center"
                },
            ]
        });
    </script>
@endpush
