<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class DaftarLokasiController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('admin.location.daftarlokasi', compact('locations'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('admin.location.CreateLokasi', compact('locations'));
    }

    public function store(Request $request)
    {
        $validated = $request -> validate([
            'nama_lokasi' => 'required | string',
            'gambar' => 'required | string',
        ]);

        Location::create($validated);

        return redirect('/location')->with('success', 'Lokasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $locations = Location::find($id);
        return view('admin.location.EditLokasi')->with(compact('locations'));
    }

    public function update(Request $request, $id)
    {
        $locations = Location::find($id);
        $validated = $request -> validate([
            'nama_lokasi' => 'required | string',
            'gambar' => 'required | string',
        ]);

        $locations->update($validated);
        return redirect('/location')->with('success', 'Data lokasi berhasil diubah');
    }

    public function destroy($id)
    {
        $locations = Location::find($id);
        $locations->delete();
        return redirect('/location')->with('success', 'Data lokasi berhasil dihapus');
    }
}
