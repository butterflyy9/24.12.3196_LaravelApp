@extends('layouts.app')

@section('content')

<section class="hero text-center py-10">
    <h1 class="text-4xl font-bold text-indigo-700">
        Selamat Datang di Amikom Hub
    </h1>
</section>

<!-- Blok Navigasi Filter Kategori -->
<div class="mb-8 flex flex-wrap justify-center gap-4">

    <!-- Tombol Semua Kategori -->
    <a href="/"
        class="px-5 py-2 bg-gray-200 hover:bg-gray-300 rounded-xl text-black font-semibold shadow-sm transition duration-300">

        Semua Kategori

    </a>

    <!-- Tab kategori dinamis -->
    @foreach($categories as $cat)

        <a href="/?category={{ $cat->slug }}"
            class="px-5 py-2 bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 rounded-xl font-semibold shadow-sm transition duration-300">

            {{ $cat->name }}

        </a>

    @endforeach

</div>

<!-- Zona Menampilkan Grid List Event -->
<section class="events grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    @foreach($events as $event)

    <div
        class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">

        <div class="relative overflow-hidden aspect-[3/4]">

            <img src="https://placehold.co/200x600"
                alt="{{ $event->title }}"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

            <div
                class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">

                {{ $event->category->name }}

            </div>

        </div>

        <div class="p-6">

            <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">
                {{ $event->title }}
            </h3>

            <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">

                <svg class="w-4 h-4"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>

                </svg>

                <span>
                    {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y H:i') }}
                </span>

            </div>

            <div class="flex justify-between items-center pt-4 border-t">

                <span class="text-2xl font-black text-indigo-600">
                    Rp {{ number_format($event->price, 0, ',', '.') }}
                </span>

                <a href="{{ route('event.detail') }}"
                    class="px-5 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">

                    Lihat Detail

                </a>

            </div>

        </div>

    </div>

    @endforeach

</section>

@endsection