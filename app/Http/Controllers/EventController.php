<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Fetch all events (latest first)
        $events = Event::orderBy('date', 'desc')->get();

        return view('frontend.events', compact('events'));
    }

    public function show(Event $event)
    {
        return view('frontend.show', compact('event'));
    }

}
