<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = \App\Models\Event::with('category')->latest()->paginate(10);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = \App\Models\Category::all();

        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
{
    // Validasi data
    $data = $request->validate([
        'category_id' => 'required|exists:categories,id',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'date' => 'required|date',
        'location' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|numeric|min:1',
        'poster' => 'nullable|image|max:2048'
    ]);

    // Upload poster jika ada file
    if ($request->hasFile('poster')) {
        $data['poster_path'] = $request->file('poster')
            ->store('posters', 'public');
    }

    // Simpan data event
    Event::create($data);

    return redirect()->route('admin.events.index')
        ->with('success', 'Data Event berhasil ditambahkan.');
}

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Data event berhasil dihapus secara permanen.');
    }

    public function edit(Event $event)
    {
        $categories = \App\Models\Category::all();

        return view('admin.events.edit', compact('event', 'categories'));
    }

   public function update(Request $request, Event $event)
{
    $data = $request->validate([
        'category_id' => 'required|exists:categories,id',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'date' => 'required|date',
        'location' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|numeric|min:1',
        'poster' => 'nullable|image|max:2048'
    ]);

    if ($request->hasFile('poster')) {

        // Hapus poster lama jika ada
        if ($event->poster_path) {
            Storage::disk('public')->delete($event->poster_path);
        }

        // Upload poster baru
        $data['poster_path'] = $request->file('poster')
            ->store('posters', 'public');
    }

    $event->update($data);

    return redirect()->route('admin.events.index')
        ->with('success', 'Event berhasil diperbarui.');
}
}