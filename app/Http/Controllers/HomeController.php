<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // ambil semua kategori
        $categories = Category::all();

        // ambil event beserta category
        $query = Event::with('category')
                    ->where('date', '>=', now())
                    ->orderBy('date', 'asc');

        // filter kategori
        if ($request->has('category') && $request->category != '') {

            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // ambil data event
        $events = $query->get();

        // kirim ke welcome.blade.php
        return view('welcome', compact('events', 'categories'));
    }
}