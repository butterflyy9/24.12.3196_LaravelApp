@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="text-center py-12">
    <h1 class="text-5xl font-extrabold text-indigo-700 mb-4">
        Selamat Datang di AmikomEventHub
    </h1>

    <p class="text-slate-500 text-lg">
        Temukan event terbaik kampus favoritmu
    </p>
</section>

<!-- FILTER KATEGORI -->
<section class="mb-10">

    <div class="flex flex-wrap justify-center gap-4">

        <!-- Semua -->
        <a href="/"
            class="px-6 py-3 rounded-full bg-indigo-600 text-white font-semibold shadow-md hover:bg-indigo-700 transition duration-300">

            Semua

        </a>

        <!-- Kategori -->
        @foreach($categories as $cat)

            <a href="/?category={{ $cat->slug }}"
                class="px-6 py-3 rounded-full bg-white border border-indigo-200 text-indigo-600 font-semibold shadow-sm hover:bg-indigo-600 hover:text-white hover:shadow-lg transition duration-300">

                {{ $cat->name }}

            </a>

        @endforeach

    </div>

</section>

<!-- GRID EVENT -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    @foreach($events as $event)

    <div
        class="group bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-2xl transition duration-300">
<!-- IMAGE -->
<div class="relative overflow-hidden h-[420px]">

    <img
    src="{{ asset('storage/' . $event->poster_path) }}"
    alt="{{ $event->title }}"
    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

    <!-- CATEGORY BADGE -->
    <div
        class="absolute top-4 left-4 bg-white/90 backdrop-blur px-4 py-2 rounded-xl text-xs font-bold uppercase text-indigo-600 shadow">

        {{ $event->category->name }}

    </div>

</div>
        <!-- CONTENT -->
        <div class="p-6">

            <h2
                class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-indigo-600 transition">

                {{ $event->title }}

            </h2>

            <!-- DATE -->
            <div class="flex items-center gap-2 text-slate-500 text-sm mb-5">

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
                    {{ \Carbon\Carbon::parse($event->date)->format('d M Y • H:i') }}
                </span>

            </div>

            <!-- FOOTER -->
            <div class="flex items-center justify-between border-t pt-5">

                <span class="text-2xl font-black text-indigo-600">

                    Rp {{ number_format($event->price, 0, ',', '.') }}

                </span>

                <a href="{{ route('event.detail', $event->id) }}"
                    class="px-5 py-3 rounded-xl bg-indigo-50 text-indigo-600 font-bold hover:bg-indigo-600 hover:text-white transition duration-300">

                    Lihat Detail

                </a>

            </div>

        </div>

    </div>

    @endforeach

</section>

@endsection