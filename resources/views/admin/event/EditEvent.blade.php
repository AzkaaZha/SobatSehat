@extends('admin.layout.index')
@extends('admin.layout.form')

@section('content')

<div class="content-wrapper">
    <div class="col-md-12">
        <div class="form h-100">
            <h3 style="font-weight: bold; color: #530986;">Edit Event</h3>
            <form class="mb-5" method="POST" action="{{ url('event/update', $events->id) }}" id="contactForm" name="contactForm">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="" class="col-form-label">Nama Event</label>
                        <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Masukkan nama event" value="{{ $events->nama_event }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="" class="col-form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal"  placeholder="Tanggal" value="{{ $events->tanggal }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                    <label for="id_location" class="col-form-label">Lokasi</label>
                        <select name="id_location" id="id_location" name="id_location" class="form-control">
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}"{{ ($location->id == $events->id_location)? 'selected' : '' }}>{{ $location->nama_lokasi}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="budget" class="col-form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Sebutkan deskripsi event" value="{{ $events->deskripsi }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="message" class="col-form-label">Foto Event</label>
                        <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Masukkan Foto" value="{{ $events->gambar }}">
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
