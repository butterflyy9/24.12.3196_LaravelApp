<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menjumlahkan total pendapatan dari transaksi yang sudah lunas
        $totalRevenue = Transaction::whereIn('status', [
            'settlement',
            'success',
        ])->sum('total_price');

        // Menghitung jumlah tiket yang sudah terjual/lunas
        $ticketsSold = Transaction::whereIn('status', [
            'settlement',
            'success',
        ])->count();

        // Menghitung jumlah event aktif yang akan datang
        $activeEvents = Event::where('date', '>=', now())->count();

        // Menghitung transaksi yang masih menunggu pembayaran
        $pendingOrders = Transaction::where('status', 'pending')->count();

        // Mengambil 5 transaksi terbaru beserta data event-nya
        $recentTransactions = Transaction::with('event')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalRevenue',
            'ticketsSold',
            'activeEvents',
            'pendingOrders',
            'recentTransactions'
        ));
    }
}