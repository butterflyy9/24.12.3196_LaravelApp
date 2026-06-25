<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AmikomEventHub')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(255,255,255,.75);
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

            <a href="/" class="text-indigo-600">
                Beranda
            </a>

            <a href="#" class="hover:text-indigo-600 transition">
                Kategori
            </a>

            <a href="#" class="hover:text-indigo-600 transition">
                Tentang Kami
            </a>

        </div>

    </nav>

    <!-- ISI HALAMAN -->
    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>

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