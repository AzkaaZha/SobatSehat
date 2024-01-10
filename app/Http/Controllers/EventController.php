<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Location;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $locations = Location::all();
        return view('event', compact('events', 'locations'));
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

        return redirect('/event')->with('success', 'Event berhasil ditambahkan');
    }

    public function edit($id)
    {
        $events = Event::find($id);
        $locations = Location::all();
        return view('admin.event.EditEvent')->with(compact('events', 'locations'));
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
        return redirect('/event')->with('success', 'Data event berhasil diubah');
    }

    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        return redirect('/event')->with('success', 'Data event berhasil dihapus');
    }
}
