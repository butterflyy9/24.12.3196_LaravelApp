<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   public function show($id)
{
    $event = \App\Models\Event::findOrFail($id);

    return view('event-detail', compact('event'));
}

    public function checkout()
    {
        return view('checkout');
    }

    public function ticket()
    {
        return view('ticket');
    }

    public function indexAdmin()
    {
        return view('admin.events');
    }

    public function index()
{
 $events = \App\Models\Event::with('category')->latest()->paginate(10);
 return view('admin.events.index', compact('events'));
}
}