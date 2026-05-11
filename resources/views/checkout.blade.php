@extends('layouts.app')

@section('content')

<main class="max-w-3xl mx-auto px-6 py-20">

    <div class="mb-12">
        <a href="/event/1" class="text-indigo-600 font-bold">
            ← Kembali ke Event
        </a>

        <h1 class="text-4xl font-extrabold mt-4">Checkout</h1>

        <p class="text-slate-500 mt-2">
            Lengkapi data Anda untuk mendapatkan tiket.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-8">

        <!-- Summary -->
        <div class="bg-white rounded-3xl border p-8 shadow-sm">

            <h3 class="text-xl font-bold mb-6">Pesanan Anda</h3>

            <div class="flex gap-6 items-start">

                <img src="{{ asset('assets/concert.png') }}"
                    class="w-24 h-24 rounded-2xl object-cover">

                <div>
                    <h4 class="font-bold text-lg">Jazz Night 2024</h4>
                    <p class="text-slate-500">16 Nov 2024</p>
                    <p class="text-indigo-600 font-bold mt-2">
                        1 x Rp 150.000
                    </p>
                </div>

            </div>

            <div class="mt-8 pt-6 border-t space-y-3">

                <div class="flex justify-between">
                    <span>Harga Tiket</span>
                    <span>Rp 150.000</span>
                </div>

                <div class="flex justify-between">
                    <span>Biaya Layanan</span>
                    <span>Rp 5.000</span>
                </div>

                <div class="flex justify-between text-2xl font-black border-t pt-4">
                    <span>Total</span>
                    <span class="text-indigo-600">Rp 155.000</span>
                </div>

            </div>

        </div>

        <!-- Form -->
        <div class="bg-white rounded-3xl border p-8 shadow-sm">

            <h3 class="text-xl font-bold mb-6 text-indigo-600">
                Data Pemesan
            </h3>

            <form class="space-y-6">

                <input type="text"
                    placeholder="Nama Lengkap"
                    class="w-full border p-4 rounded-2xl">

                <input type="email"
                    placeholder="Email Aktif"
                    class="w-full border p-4 rounded-2xl">

                <input type="text"
                    placeholder="No WhatsApp"
                    class="w-full border p-4 rounded-2xl">

                <a href="/my-ticket"
                    class="block text-center w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold">
                    Bayar Sekarang
                </a>

            </form>

        </div>

    </div>

</main>

@endsection