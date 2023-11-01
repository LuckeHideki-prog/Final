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

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->title = $request->title;
        $event->title = $request->title;
        $event->title = $request->title;
        $event->title = $request->title;
        $event->title = $request->title;

        $event->save();

        return redirect('/calendar')->whith('msg','Reserva criada com sucesso');
    }
}


function store(Request $request) {
    $event = new Event;

    $event->room = $request->room;
    $event->description = $request->description;

}
