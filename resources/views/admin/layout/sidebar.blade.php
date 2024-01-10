<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - Sobat Sehat</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style2.css') }}" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo.png') }}" />

    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}" />

  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="{{url('/dashboard')}}"><img src="{{ asset('admin/assets/images/logo2.png') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{url('/dashboard')}}"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" /></a>
        </div>
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('admin/assets/images/faces/face1.jpg')}}" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                  <span class="font-weight-medium mb-2">{{ Auth::user()->name }}</span>
                  <span class="font-weight-normal">{{ Auth::user()->role }}</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/event')}}">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                <span class="menu-title">Daftar Event</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/location')}}">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Daftar Lokasi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/user')}}">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Daftar User</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('/news')}}">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Daftar Berita</span>
              </a>
            </li>
  
            <br><br><br>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/logout')}}">
                <i class="mdi mdi-door-open menu-icon"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
      </nav>



