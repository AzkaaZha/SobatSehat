@extends('admin.layout.index')

@section('content')

    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    <script>
                        setTimeout(function() {
                            $('.alert').fadeOut('slow');
                        }, 3000);
                    </script>
                    @endif
                    <div>
                        <h4 class="card-title">Daftar Berita</h4>
                        <a class="btn btn-primary" href="{{url('/event/CreateBerita')}}">Tambah Berita <i class="mdi mdi-plus-box"></i></a>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                            <tr>
                                <th> No </th>
                                <th> Judul Berita </th>
                                <th> Tanggal Berita </th>
                                <th> Author</th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $news)
                                    <tr class="">
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $news->judul }} </td>
                                        <td> {{ $news->tanggal }} </td>
                                        <td>
                                            @if (Auth::user()->role == 'admin')
                                            <a class="btn btn-warning btn-sm" href="{{ url('event/EditBerita', $news->id) }}">Edit <i class="mdi mdi-pencil-box-outline"></i></a>
                                            <form class="d-inline" action="{{ url('event/destroy', $news->id) }}" method="post">

                                            @csrf
                                            @method('delete')
                                            <button  class="btn btn-danger btn-sm" type="submit" onclick="return confirmDelete(event)">Delete <i class="mdi mdi-delete"></i></button>
                                            @endif
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function confirmDelete(event) {
      if(!confirm("Apakah anda yakin ingin menghapus data tersebut ?")){
        event.preventDefault()
        return false;
      }
    }
  </script>
