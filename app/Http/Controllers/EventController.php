<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;

class EventController extends Controller
{
    // HOMEPAGE USER
    public function home(Request $request)
    {
        $categories = Category::all();

        $events = Event::with('category');

        // FILTER CATEGORY
        if ($request->category) {

            $events->whereHas('category', function ($query) use ($request) {

                $query->where('slug', $request->category);

            });
        }

        $events = $events->latest()->get();

        return view('layouts.app', compact('events', 'categories'));
    }

    // DETAIL EVENT
public function show(Event $event)
{
    // Mengambil daftar kategori untuk menu navigasi
    $categories = Category::all();

    // Mengirim data event dan kategori ke view
    return view('event-detail', compact('categories', 'event'));
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

    // ADMIN EVENT
    public function index()
    {
        $events = Event::with('category')->latest()->paginate(10);

        return view('admin.events.index', compact('events'));
    }
}