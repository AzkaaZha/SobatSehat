<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class BeritaController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('berita', compact('news'));
    }


    public function show(string $id)
    {
        $news = News::find($id);
        return view('detailberita', [
            'news' => $news
        ]);
    }
}
