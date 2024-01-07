<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller

{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function kontributor()
    {
        echo "Ini halaman kontributor";
    }

    public function admin()
    {
        echo "Ini halaman admin";
    }

    public function user()
    {
        echo "Ini halaman user";
    }
}

