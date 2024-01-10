<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;

class HomeController extends Controller
{

   
    public function index()
    {
        $events = Event::all();
        $locations = Location::all();
        return view('home', compact('events', 'locations'));
    }

    public function show(Event $event)
    {
        return view('detailevent', compact('event'));
    }

}
