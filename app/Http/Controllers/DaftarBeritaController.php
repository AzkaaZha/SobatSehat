<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class DaftarBeritaController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.daftarberita', compact('news'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('admin.news.CreateBerita', compact('locations'));
    }

    public function store(Request $request)
    {
        $validated = $request -> validate([
            'nama_event' => 'required | string',
            'tanggal' => 'required | date',
            'deskripsi' => 'required | string',
            'gambar' => 'required | string',
            'id_location' => 'required',
        ]);

        Event::create($validated);

        return redirect('/news')->with('success', 'Event berhasil ditambahkan');
    }

    public function edit($id)
    {
        $events = Event::find($id);
        $locations = Location::all();
        return view('admin.news.EditEvent')->with(compact('events', 'locations'));
    }

    public function update(Request $request, $id)
    {
        $events = Event::find($id);
        $validated = $request -> validate([
            'nama_event' => 'required | string',
            'tanggal' => 'required | date',
            'deskripsi' => 'required | string',
            'gambar' => 'required | string',
            'id_location' => 'required',
        ]);

        $events->update($validated);
        return redirect('/news')->with('success', 'Data news berhasil diubah');
    }

    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        return redirect('/news')->with('success', 'Data news berhasil dihapus');
    }
}
