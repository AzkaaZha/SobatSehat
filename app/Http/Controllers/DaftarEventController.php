<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarEventController extends Controller
{
    public function index()
    {
        return view('admin.event.daftarevent');
    }
}
