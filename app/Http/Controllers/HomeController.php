<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;

class HomeController extends Controller
{

    public function index()
    {
        $events = Event::take(3)->get();
        $locations = Location::take(3)->get();
        return view('home', compact('events', 'locations'));
    }

    public function show(string $id)
    {
        $event = Event::find($id);
        // Mendapatkan lokasi event
        $location = Location::find($event->id_location);
        
        // Mendapatkan event lainnya di lokasi yang sama
        $otherEvents = Event::where('id_location', $location->id)
            ->where('id', '!=', $event->id)
            ->take(4) // Sesuaikan jumlah event lain yang ingin ditampilkan
            ->get();

        return view('detailevent', compact('event', 'location', 'otherEvents'));
        }
}
