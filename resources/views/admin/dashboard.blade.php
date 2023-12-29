@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
  <div class="col-lg-12 grid-margin stretch-card">
      @if (session('success'))
      <div class="alert alert-success">
      {{ session('success') }}
      </div>
      @endif
      <div class="card" >
          <div class="card-body" style="background-image: url:">
              <div>
                  <h1 class="card-title">WELCOME TO OUR DASHBOARD</h1>
                <h4>C-MART UMKM PRODUCT</h4>
              </div>
              <br>
          </div>
      </div>
  </div>
</div>
@endsection