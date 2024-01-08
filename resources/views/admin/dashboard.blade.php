@extends('admin.layout.index')

@section('content')

<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="text-gray">Hello Admin, Welcome Back.</h5>
                    <h2 style="font-weight: bold; color: #530986;">This Dashboard Is Updated</h2>
                </div>
                <br>

                <!-- Card Section Start -->
                <div class="col-12">
                    <div class="row">

                        <div class="col-4">
                            <div class="card">
                                <div class="card-body" style="background-color: #EACBF9;">
                                    <div class="row  justify-content-center" style="background-color: white; margin-bottom:0.5rem; border-radius: 0.3rem; margin-left: 0; margin-right: 0;">
                                        <i class="mdi mdi-calendar fs-5 fc-gradient" style="font-size: 8rem;"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h5 style="font-weight: bold; color: #530986;">Daftar Event</h5>
                                            <h6 style="font-size: 0.5rem;">3 Daftar Event</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="{{url('/event')}}" class="btn text-white" style="background-color: #530986; border-radius: 0.2rem;"> <i class="mdi mdi-plus text-white" style="font-weight: bold;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card">
                                <div class="card-body" style="background-color: #EACBF9;">
                                    <div class="row  justify-content-center" style="background-color: white; margin-bottom:0.5rem; border-radius: 0.3rem; margin-left: 0; margin-right: 0;">
                                        <i class="mdi mdi-newspaper fs-5 fc-gradient" style="font-size: 8rem;"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h5 style="font-weight: bold; color: #530986;">Daftar Berita</h5>
                                            <h6 style="font-size: 0.5rem;">3 Daftar Berita</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="" class="btn text-white" style="background-color: #530986; border-radius: 0.2rem;"> <i class="mdi mdi-plus" style="font-weight: bold;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card">
                                <div class="card-body" style="background-color: #EACBF9;">
                                    <div class="row  justify-content-center" style="background-color: white; margin-bottom:0.5rem; border-radius: 0.3rem; margin-left: 0; margin-right: 0;">
                                        <i class="mdi mdi-account fs-5 fc-gradient" style="font-size: 8rem;"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h5 style="font-weight: bold; color: #530986;">Daftar User</h5>
                                            <h6 style="font-size: 0.5rem;">3 Daftar User</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="" class="btn text-white" style="background-color: #530986; border-radius: 0.2rem;"> <i class="mdi mdi-plus" style="font-weight: bold;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mt-4">
                            <div class="card">
                                <div class="card-body" style="background-color: #EACBF9;">
                                    <div class="row  justify-content-center" style="background-color: white; margin-bottom:0.5rem; border-radius: 0.3rem; margin-left: 0; margin-right: 0;">
                                        <i class="mdi mdi-map fs-5 fc-gradient" style="font-size: 8rem;"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h5 style="font-weight: bold; color: #530986;">Daftar Lokasi</h5>
                                            <h6 style="font-size: 0.5rem;">3 Daftar Lokasi</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="" class="btn text-white" style="background-color: #530986; border-radius: 0.2rem;"> <i class="mdi mdi-plus" style="font-weight: bold;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card Section End -->

            </div>
        </div>
    </div>
</div>
@endsection
