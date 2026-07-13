@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard Ringkasan')

@section('content')
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 gap-6 mb-10 md:grid-cols-2 lg:grid-cols-4">
        <!-- Total Pendapatan -->
        <div class="p-6 bg-white border border-slate-100 rounded-3xl shadow-sm">
            <div class="flex items-center justify-center w-12 h-12 mb-4 text-indigo-600 bg-indigo-50 rounded-2xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </div>

            <p class="mb-1 text-sm font-bold uppercase text-slate-400">
                Total Pendapatan
            </p>

            <h3 class="text-2xl font-black">
                Rp {{ number_format($totalRevenue, 0, ',', '.') }}
            </h3>
        </div>

        <!-- Tiket Terjual -->
        <div class="p-6 bg-white border border-slate-100 rounded-3xl shadow-sm">
            <div class="flex items-center justify-center w-12 h-12 mb-4 text-green-600 bg-green-50 rounded-2xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
                    />
                </svg>
            </div>

            <p class="mb-1 text-sm font-bold uppercase text-slate-400">
                Tiket Terjual
            </p>

            <h3 class="text-2xl font-black">
                {{ number_format($ticketsSold, 0, ',', '.') }}
            </h3>
        </div>

        <!-- Event Aktif -->
        <div class="p-6 bg-white border border-slate-100 rounded-3xl shadow-sm">
            <div class="flex items-center justify-center w-12 h-12 mb-4 text-orange-600 bg-orange-50 rounded-2xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </div>

            <p class="mb-1 text-sm font-bold uppercase text-slate-400">
                Event Aktif
            </p>

            <h3 class="text-2xl font-black">
                {{ $activeEvents }} Event
            </h3>
        </div>

        <!-- Pesanan Pending -->
        <div class="p-6 bg-white border border-slate-100 rounded-3xl shadow-sm">
            <div class="flex items-center justify-center w-12 h-12 mb-4 text-rose-600 bg-rose-50 rounded-2xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </div>

            <p class="mb-1 text-sm font-bold uppercase text-slate-400">
                Pesanan Pending
            </p>

            <h3 class="text-2xl font-black">
                {{ $pendingOrders }} Pesanan
            </h3>
        </div>
    </div>

    <!-- Latest Sales Table -->
    <div class="overflow-hidden bg-white border border-slate-100 rounded-3xl shadow-sm">
        <div class="flex items-center justify-between p-8 border-b border-slate-100">
            <h3 class="text-xl font-black">Transaksi Terakhir</h3>

            <a
                href="{{ route('admin.transactions.index') }}"
                class="font-bold text-indigo-600 hover:underline"
            >
                Lihat Semua
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="text-[10px] font-black tracking-widest uppercase bg-slate-50 text-slate-400">
                    <tr>
                        <th class="w-1/4 px-8 py-4">Tgl Transaksi</th>
                        <th class="w-1/4 px-8 py-4">Pembeli</th>
                        <th class="w-1/4 px-8 py-4">Event</th>
                        <th class="w-[10%] px-8 py-4">Status</th>
                        <th class="px-8 py-4 text-right">Total</th>
                    </tr>
                </thead>

                <tbody class="border-t divide-y divide-slate-100">
                    @forelse ($recentTransactions as $trx)
                        <tr class="transition hover:bg-slate-50">
                            <td class="max-w-xs px-8 py-6 text-sm text-slate-600 break-all">
                                {{ $trx->created_at->format('d M y - H:i') }}
                                <br>

                                <span class="text-xs text-slate-400">
                                    {{ $trx->order_id }}
                                </span>
                            </td>

                            <td class="px-8 py-6">
                                <p class="max-w-[150px] text-sm font-bold tracking-wide uppercase truncate">
                                    {{ $trx->customer_name }}
                                </p>

                                <p class="max-w-[150px] text-xs truncate text-slate-400">
                                    {{ $trx->customer_email }}
                                </p>
                            </td>

                            <td class="max-w-xs px-8 py-6 font-medium truncate text-slate-600">
                                {{ $trx->event->title ?? '-' }}
                            </td>

                            <td class="px-8 py-6 whitespace-nowrap">
                                @if ($trx->status === 'settlement' || $trx->status === 'success')
                                    <span class="px-3 py-1 text-xs font-bold text-green-700 uppercase bg-green-100 rounded-lg">
                                        Success
                                    </span>
                                @elseif ($trx->status === 'pending')
                                    <span class="px-3 py-1 text-xs font-bold text-orange-700 uppercase bg-orange-100 rounded-lg">
                                        Pending
                                    </span>
                                @else
                                    <span class="px-3 py-1 text-xs font-bold text-rose-700 uppercase bg-rose-100 rounded-lg">
                                        {{ $trx->status }}
                                    </span>
                                @endif
                            </td>

                            <td class="px-8 py-6 font-black text-right text-indigo-600 whitespace-nowrap">
                                Rp {{ number_format($trx->total_price, 0, ',', '.') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-8 py-10 text-center text-slate-500">
                                Belum ada transaksi
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection