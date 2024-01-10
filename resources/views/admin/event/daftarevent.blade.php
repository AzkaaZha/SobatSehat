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
                        <h4 class="card-title">Daftar Event</h4>
                        <a class="btn btn-primary" href="{{url('/event/CreateEvent')}}">Tambah Event <i class="mdi mdi-plus-box"></i></a>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Event</th>
                                <th> Tanggal Pelaksanaan</th>
                                <th> Lokasi</th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr class="">
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $event->nama_event }} </td>
                                        <td> {{ $event->tanggal }} </td>
                                        <td> {{ $event->lokasi_id }} </td>

                                        <td>
                                            {{-- @if (Auth::user()->role == 'admin') --}}
                                            <a class="btn btn-warning" href="{{ url('event/EditEvent', $event->id) }}">Edit <i class="mdi mdi-pencil-box-outline"></i></a>
                                            <form class="d-inline" action="{{ url('event/destroy', $event->id) }}" method="post">

                                            @csrf
                                            @method('delete')
                                            <button  class="btn btn-danger btn-sm" type="submit" onclick="return confirmDelete(event)">Delete <i class="mdi mdi-delete"></i></button>
                                            {{-- @endif --}}
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
