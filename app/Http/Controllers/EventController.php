<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
class EventController extends Controller
{
    public function index() {

        $events =Event::all();

        return view('welcome',['events' =>$events ]);
    }

    public function create() {
        return view('events.create');
    }

    public function register() {
        return view('events.room');
    }
}


function store(Request $request) {
    $event = new Event;

    $event->room = $request->room;
    $event->description = $request->description;

}
