<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;

class TicketController extends Controller
{
    public function show(Transaction $transaction)
    {
        $categories = Category::all();

        return view('ticket.show', compact('transaction', 'categories'));
    }
}