<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmikomEventHub - Temukan Event Seru!</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    <!-- NAVBAR -->
    <nav
        class="glass sticky top-6 z-50 max-w-7xl mx-auto mt-6 px-8 py-5 rounded-3xl border border-white/30 shadow-lg flex justify-between items-center">

        <div class="flex items-center gap-3">

            <div
                class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center text-white font-bold text-xl shadow-md">

                AH

            </div>

            <span class="text-3xl font-extrabold tracking-tight">
                AmikomEventHub
            </span>

        </div>

        <div class="hidden md:flex gap-10 font-semibold text-lg">

            <a href="#" class="text-indigo-600">
                Jelajahi
            </a>

            <a href="#" class="hover:text-indigo-600 transition">
                Kategori
            </a>

            <a href="#" class="hover:text-indigo-600 transition">
                Tentang Kami
            </a>

        </div>

    </nav>

    <!-- HERO -->
    <section
        class="max-w-7xl mx-auto px-6 pt-24 pb-20 flex flex-col lg:flex-row items-center gap-16">

        <!-- LEFT -->
        <div class="flex-1">

            <span
                class="inline-block px-5 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-widest mb-8">

                #1 Event Platform

            </span>

            <h1
                class="text-5xl md:text-7xl font-extrabold leading-tight mb-8">

                Temukan &
                <span class="text-indigo-600">
                    Pesan Tiket
                </span>
                Event Impianmu.

            </h1>

            <p
                class="text-xl text-slate-500 leading-relaxed max-w-2xl mb-10">

                Dari konser musik hingga workshop teknologi,
                semua event terbaik tersedia hanya dalam satu platform.

            </p>

            <a href="#events"
                class="inline-block px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition duration-300">

                Mulai Jelajah

            </a>

        </div>

        <!-- RIGHT -->
        <div class="flex-1">

            <img src="{{ asset('assets/concert.png') }}"
                alt="Concert"
                class="w-full rounded-[2.5rem] shadow-2xl object-cover aspect-[4/5]">

        </div>

    </section>

    <!-- PARTNER SECTION -->
    <section class="max-w-7xl mx-auto px-6 py-16">

        <div class="text-center mb-14">

            <h2
                class="text-4xl md:text-5xl font-extrabold text-indigo-600 mb-4">

                Partner AmikomEventHub

            </h2>

            <p class="text-slate-500 text-lg">

                Partner terpercaya yang menghadirkan event-event berkualitas.

            </p>

        </div>

        <!-- PARTNER GRID -->
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            @foreach($partners as $partner)

            <div
                class="bg-white rounded-3xl shadow-md hover:shadow-2xl transition duration-300 p-8 text-center">

                <img src="{{ $partner->logo_url }}"
                    alt="{{ $partner->name }}"
                    class="w-20 h-20 rounded object-contain bg-white p-2">

                <h3 class="text-2xl font-bold text-slate-800">

                    {{ $partner->name }}

                </h3>

            </div>

            @endforeach

        </div>

    </section>

    <!-- KATEGORI -->
    <section class="max-w-7xl mx-auto px-6 py-20 border-t border-slate-200">

        <div class="text-center mb-12">

            <h2
                class="text-4xl md:text-5xl font-extrabold text-indigo-600 mb-4">

                Semua Kategori

            </h2>

            <p class="text-slate-500 text-lg">

                Temukan berbagai event menarik sesuai minat Anda.

            </p>

        </div>

        <!-- FILTER BUTTON -->
        <div class="flex flex-wrap justify-center gap-5">

            <!-- SEMUA -->
            <a href="/"
                class="px-7 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-lg hover:scale-105 transition">

                Semua Kategori

            </a>

            <!-- CATEGORY -->
            @foreach($categories as $cat)

            <a href="/?category={{ $cat->slug }}"
                class="px-7 py-4 bg-white border-2 border-indigo-100 text-indigo-600 rounded-2xl font-bold text-lg hover:bg-indigo-600 hover:text-white transition duration-300">

                {{ $cat->name }}

            </a>

            @endforeach

        </div>

    </section>

    <!-- EVENT -->
    <section id="events" class="max-w-7xl mx-auto px-6 pb-24">

        <div class="mb-14">

            <h2 class="text-4xl font-extrabold mb-3">

                Event Terdekat

            </h2>

            <p class="text-slate-500 text-lg">

                Jangan sampai ketinggalan acara seru minggu ini!

            </p>

        </div>

        <!-- GRID -->
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach($events as $event)

            <div
                class="group bg-white rounded-[2rem] overflow-hidden shadow-md hover:shadow-2xl transition duration-300">

                <!-- IMAGE -->
                <div class="relative overflow-hidden aspect-[3/4]">

                    <img src="{{ asset('storage/' . $event->poster_path) }}"
                        alt="{{ $event->title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <!-- CATEGORY -->
                    <div
                        class="absolute top-5 left-5 bg-white/90 backdrop-blur px-4 py-2 rounded-xl text-xs font-extrabold uppercase text-indigo-600">

                        {{ $event->category->name }}

                    </div>

                </div>

                <!-- CONTENT -->
                <div class="p-7">

                    <h3
                        class="text-2xl font-extrabold mb-4 group-hover:text-indigo-600 transition">

                        {{ $event->title }}

                    </h3>

                    <!-- DATE -->
                    <div
                        class="flex items-center gap-2 text-slate-500 mb-6">

                        <svg class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z">
                            </path>

                        </svg>

                        <span class="font-medium">

                            {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}

                        </span>

                    </div>

                    <!-- PRICE -->
                    <div
                        class="flex justify-between items-center pt-5 border-t">

                        <span
                            class="text-2xl font-black text-indigo-600">

                            Rp {{ number_format($event->price, 0, ',', '.') }}

                        </span>

                        <a href="{{ route('events.show', $event->id) }}"
    class="px-5 py-3 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">

    Detail

</a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </section>

    <!-- FOOTER -->
    <footer
        class="bg-indigo-900 text-white py-20 px-6 mt-10">

        <div class="max-w-7xl mx-auto text-center">

            <h3 class="text-3xl font-extrabold mb-4">

                AmikomEventHub

            </h3>

            <p class="text-indigo-200 text-lg">

                Platform reservasi tiket event online terbaik.

            </p>

            <div class="mt-8 text-indigo-300">

                © 2026 AmikomEventHub.
                Built with Laravel & Tailwind CSS.

            </div>

        </div>

    </footer>

</body>

</html>