<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;

class LokasiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $locations = Location::query();

        if ($search) {
            $locations->where('nama_lokasi', 'like', '%' . $search . '%' ); {
            };
        }

        $locations = $locations->paginate(5);

        if ($search && $locations->isEmpty()) {
            return view('lokasi', [ 'locations' => $locations, 'search' => $search, 'message' => 'Lokasi tidak ditemukan']);
        }
        return view('lokasi', compact('search', 'locations'));
    }

    public function showEvents(Location $location)
    {
        $events = Event::where('id_location', $location->id)->get();

        return view('ShowEvent', compact('events', 'location'));
    }
}
