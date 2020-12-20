@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Pengguna</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Manajemen Toko</a></div>
        <div class="breadcrumb-item"><a href="#">Pengguna</a></div>
        <div class="breadcrumb-item">Create</div>
    </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Foto Pengguna</h4>
                    </div>
                    <div class="card-body foto-upload">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Pilih File</label>
                                    <input type="file" name="foto" id="image-upload"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Data Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" required="">
                                    <div class="invalid-feedback">
                                        Form Nama Lengkap harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="form-control selectric" name="level" required>
                                        @php
                                        $l = ["Admin Utama", "Admin Gudang", "Kasir"]
                                        @endphp
                                        @foreach($l as $ls)
                                        <option value="{{ $ls }}">{{ $ls }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Level harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required=""  >
                                    <div class="invalid-feedback">
                                        Form Email harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required=""  >
                                    <div class="invalid-feedback">
                                        Form Password harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="summernote-simple" name="alamat" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Form Alamat harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1">Setuju, dan sudah memeriksa data dengan benar.</label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" id="submit-btn">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section("scriptLibraies")
    <script src="{{ asset('stisla/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('stisla/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/izitoast/js/iziToast.min.js') }}"></script>
@endsection
@section("scriptCustom")
    @include("layouts.components.toastSession")
    <script>
        $('#categoryLink').addClass('active');
        $('.select2').select2()
    </script>
    <script src="{{ asset('stisla/js/page/features-post-create.js') }}"></script>
@endsection
