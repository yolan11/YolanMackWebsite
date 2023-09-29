<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'familyName' => 'required',
            'firstName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'eventDate' => 'required',
            'eventLocation' => 'required',
            'eventType' => 'required',
        ]);

        $event = new Event();
        $event->familyName = $request->familyName;
        $event->firstName = $request->firstName;
        $event->email = $request->email;
        $event->phoneNumber = $request->phoneNumber;
        $event->eventDate = $request->eventDate;
        $event->eventLocation = $request->eventLocation;
        $event->eventType = $request->eventType;
        $event->save();

        return redirect('/')->with('success', 'La reservation à été envoyé avec succès.');
    }
}



