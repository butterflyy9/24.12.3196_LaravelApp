@extends('layouts.admin')

@section('content')

<!-- Header -->
<div class="mb-10 flex justify-between items-center">

    <div>
        <h1 class="text-3xl font-black">Dashboard Ringkasan</h1>
        <p class="text-slate-500 font-medium">
            Selamat datang kembali, Admin!
        </p>
    </div>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf

        <button
            type="submit"
            class="bg-red-600 text-white px-5 py-2 rounded-xl font-semibold hover:bg-red-700 transition">
            Logout
        </button>
         </form>

</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

    <div class="bg-white p-6 rounded-3xl border shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase mb-1">
            Total Pendapatan
        </p>
        <h3 class="text-2xl font-black">Rp 12.450.000</h3>
    </div>

    <div class="bg-white p-6 rounded-3xl border shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase mb-1">
            Tiket Terjual
        </p>
        <h3 class="text-2xl font-black">1.284</h3>
    </div>

    <div class="bg-white p-6 rounded-3xl border shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase mb-1">
            Event Aktif
        </p>
        <h3 class="text-2xl font-black">8 Event</h3>
    </div>

    <div class="bg-white p-6 rounded-3xl border shadow-sm">
        <p class="text-slate-400 text-sm font-bold uppercase mb-1">
            Pending
        </p>
        <h3 class="text-2xl font-black">12 Pesanan</h3>
    </div>

</div>

<!-- Table -->
<div class="bg-white rounded-3xl border shadow-sm overflow-hidden">

    <div class="p-8 border-b flex justify-between items-center">
        <h3 class="font-black text-xl">Transaksi Terakhir</h3>

        <a href="/admin/transactions"
            class="text-indigo-600 font-bold hover:underline">
            Lihat Semua
        </a>
    </div>

    <table class="w-full text-left">

        <thead class="bg-slate-50">
            <tr>
                <th class="px-8 py-4">Pembeli</th>
                <th class="px-8 py-4">Event</th>
                <th class="px-8 py-4">Status</th>
                <th class="px-8 py-4">Total</th>
            </tr>
        </thead>

        <tbody>

            <tr class="border-t">
                <td class="px-8 py-4">Donni Prabowo</td>
                <td class="px-8 py-4">Jazz Night 2024</td>
                <td class="px-8 py-4 text-green-600">Success</td>
                <td class="px-8 py-4">Rp 155.000</td>
            </tr>

            <tr class="border-t">
                <td class="px-8 py-4">Maya Sari</td>
                <td class="px-8 py-4">AI Workshop</td>
                <td class="px-8 py-4 text-orange-600">Pending</td>
                <td class="px-8 py-4">Rp 55.000</td>
            </tr>

        </tbody>

    </table>

</div>

@endsection