@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Pengguna</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Manajemen Toko</a></div>
        <div class="breadcrumb-item"><a href="#">Pengguna</a></div>
        <div class="breadcrumb-item">Index</div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <a href="{{ route('users.create') }}" class="btn btn-flat btn-icon icon-left btn-primary"><i class="fas fa-users"></i> Tambah Data</a>
                &nbsp;
                &nbsp;
                <a target="blank" href="{{ route('printUsers') }}" class="btn btn-flat btn-icon icon-left btn-primary"><i class="fas fa-print"></i> Cetak</a>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if(!empty($res->foto))
                            <img src="{{ asset('img_upload/pengguna/'.$res->foto) }}" alt="foto" width="30" height="30" data-toggle="tooltip" data-original-title="{{ $res->name }}" style="object-fit: cover;border-radius: 50%;border: 1px solid #6777ef;">
                            @else
                            <img src="{{ asset('stisla/img/avatar/avatar-1.png') }}" alt="foto" width="30" height="30" data-toggle="tooltip" data-original-title="{{ $res->name }}" style="object-fit: cover;border-radius: 50%;border: 1px solid #6777ef;">
                            @endif
                        </td>
                        <td>{{ $res->name }}</td>
                        <td>{{ $res->email }}</td>
                        <td>
                            <div class="badge badge-primary">
                                {{ $res->level }}
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $res->id) }}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" data-uri="{{ route('users.destroy', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDestroy"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@include("layouts.components.toastSession")
@endsection
@section("scriptLibraies")
    <script src="{{ asset('stisla/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/izitoast/js/iziToast.min.js') }}"></script>
@endsection
@section("scriptSpesific")
    <script src="{{ asset('stisla/js/page/modules-datatables.js') }}"></script>
@endsection
@section("scriptCustom")
    @include("layouts.components.toastSession")
@endsection
