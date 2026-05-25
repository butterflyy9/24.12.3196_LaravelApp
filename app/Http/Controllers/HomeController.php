<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $partners = Partner::all();

        $events = Event::with('category')
            ->when($request->category, function ($query, $category) {
                $query->whereHas('category', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->orderBy('date', 'asc')
            ->get();

        return view('welcome', compact(
            'events',
            'categories',
            'partners'
        ));
    }
}