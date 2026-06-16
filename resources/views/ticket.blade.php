@extends('layouts.app')

@section('content')

<main class="min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full">

        <!-- Success -->
        <div class="text-center mb-8">

            <div class="w-20 h-20 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-white text-3xl">✓</span>
            </div>

            <h1 class="text-3xl font-black">
                Pembayaran Berhasil!
            </h1>

            <p class="text-slate-500 mt-2">
                Tiket Anda telah terbit dan siap digunakan.
            </p>

        </div>

        <!-- Ticket Card -->
        <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-2xl">

            <!-- Header -->
            <div class="p-8 bg-indigo-50 border-b text-center">

                <p class="text-indigo-600 font-bold text-xs uppercase">
                    E-Ticket Resmi
                </p>

                <h2 class="text-2xl font-black mt-2">
                    Jazz Night 2024
                </h2>

            </div>

            <!-- Body -->
            <div class="p-8 space-y-6">

                <div class="grid grid-cols-2 gap-6">

                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">
                            Nama Pembeli
                        </p>

                        <p class="font-bold">
                            Donni Prabowo
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">
                            Tanggal
                        </p>

                        <p class="font-bold">
                            16 Nov 2024
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">
                            Order ID
                        </p>

                        <p class="font-bold">
                            TRX-99210
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-slate-400 font-bold uppercase">
                            Lokasi
                        </p>

                        <p class="font-bold">
                            Blue Note Lounge
                        </p>
                    </div>

                </div>

                <!-- QR Mock -->
                <div class="bg-slate-100 p-6 rounded-3xl text-center">

                    <p class="text-xs font-bold uppercase text-slate-400 mb-4">
                        Scan QR untuk Check-in
                    </p>

                    <div class="w-40 h-40 bg-white mx-auto rounded-xl shadow"></div>

                    <p class="mt-4 font-mono font-bold">
                        TKT-001293848
                    </p>

                </div>

            </div>

            <!-- Footer -->
            <div class="px-8 pb-8">

                <button onclick="window.print()"
                    class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold">
                    Cetak / Simpan PDF
                </button>

                <a href="/"
                    class="block text-center mt-4 text-slate-500 font-bold">
                    Kembali ke Beranda
                </a>

            </div>

        </div>

    </div>

</main>

@endsection