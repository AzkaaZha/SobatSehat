@extends('admin.layout.index')
@extends('admin.layout.form')

@section('content')

<div class="content-wrapper">
    <div class="col-md-12">
        <div class="form h-100">
            <h3 style="font-weight: bold; color: #530986;">Tambah Lokasi</h3>
            <form class="mb-5" method="POST" action="{{ url('location/store') }}" id="contactForm" name="contactForm">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="" class="col-form-label">Nama Lokasi</label>
                        <input type="text" class="form-control" name="nama_lokasi" id="nama_lokasi" placeholder="Masukkan nama Lokasi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="message" class="col-form-label">Foto Lokasi</label>
                        <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Masukkan Foto"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
