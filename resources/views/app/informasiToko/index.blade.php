@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Informasi Toko</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Manajemen Toko</a></div>
            <div class="breadcrumb-item">Informasi Toko</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('informasiToko.update', $d->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            {{ method_field('PUT') }}
            <div class="col-12 col-lg-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Gambar / Logo Toko</h4>
                    </div>
                    <div class="card-body foto-upload">
                        <div class="form-group">
                            <div class="col-sm-12">
                                @if(!empty($d->foto))
                                <div id="image-preview" class="image-preview" style="background: url('{{ asset('img_upload/toko/'.$d->foto) }}'); background-size: cover; background-repeat: no-repeat;">
                                    <label for="image-upload" id="image-label">Change File</label>
                                    <input type="file" name="foto" id="image-upload"/>
                                </div>
                                @else
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Pilih File</label>
                                    <input type="file" name="foto" id="image-upload"/>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Informasi Toko</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="form-group">
                                    <label>Nama Toko</label>
                                    <input type="text" class="form-control" name="nama" required="" value="{{ $d->nama }}">
                                    <div class="invalid-feedback">
                                        Form Nama Toko harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Kode POS</label>
                                    <input type="text" class="form-control" name="kode_pos" required="" value="{{ $d->kode_pos }}">
                                    <div class="invalid-feedback">
                                        Form Kode POS harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" class="form-control" name="telepon" required="" value="{{ $d->telepon }}">
                                    <div class="invalid-feedback">
                                        Form Telepon harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" required="" value="{{ $d->keterangan }}">
                                    <div class="invalid-feedback">
                                        Form Keterangan harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="summernote-simple" name="alamat" required="">{!! $d->alamat !!}</textarea>
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
@include("layouts.components.toastSession")
@endsection

@section("scriptLibraies")
    <script src="{{ asset('stisla/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('stisla/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('stisla/modules/izitoast/js/iziToast.min.js') }}"></script>
@endsection
@section("scriptCustom")
    @include("layouts.components.toastSession")
    <script>
        $('#categoryLink').addClass('active');
    </script>
    <script src="{{ asset('stisla/js/page/features-post-create.js') }}"></script>
@endsection
