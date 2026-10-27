<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'location'    => 'nullable|string|max:255',
            'event_date'  => 'required|date',
            'time_in'     => 'required',
            'time_out'    => 'required',
        ]);

        $validated['qr_code_token'] = (string) Str::uuid();

        Event::create($validated);

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }
}