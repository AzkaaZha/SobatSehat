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
                    <h4 class="card-title">Daftar Produk</h4>
                    <a class="btn btn-info btn-lg btn-block" href="{{url('produk/createproduk')}}"><i class="mdi mdi-plus"></i>Tambah Produk</a>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Event</th>
                                <th> Lokasi</th>
                                <th> Tanggal Pelaksanaan</th>
                                <th> Harga Jual </th>
                                <th> Jenis Produk </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($products as $produk) --}}
                                <tr class="table-responsive">
                                    {{-- <td> {{ $loop->iteration }} </td> --}}
                                    {{-- <td> {{ $produk->nama }} </td>
                                    <td> {{ $produk->stok }} </td>
                                    <td> {{ 'Rp '. number_format($produk->harga_beli, 0, ',', '.') }} </td>
                                    <td> {{ 'Rp '. number_format($produk->harga_jual, 0, ',', '.') }} </td>
                                    <td> {{ $produk->jenis_produk_id }} </td>
                                    <td> 
                                        <a class="btn btn-primary btn-sm" href="{{ url('produk/showproduk', $produk->id) }}">View</a>
                                        @if (Auth::user()->role == 'admin')
                                        <a class="btn btn-warning btn-sm" href="{{ url('produk/editproduk', $produk->id) }}">Edit</a>
                                        <form class="d-inline" action="{{ url('produk/destroy', $produk->id) }}" method="post">
                                            
                                        @csrf
                                        @method('delete')
                                        <button  class="btn btn-danger btn-sm" type="submit" onclick="return confirmDelete(event)">Delete</button>
                                        @endif
                                        </form>
                                </tr> --}}
                            {{-- @endforeach --}}
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