<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - AmikomEventHub</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-900 text-indigo-100 flex flex-col p-6 space-y-8">

        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-indigo-900 font-bold">
                AH
            </div>

            <span class="text-xl font-bold text-white">
                AmikomEventHub
            </span>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 space-y-2">

            <!-- Dashboard -->
            <a href="/admin/dashboard"
                class="flex items-center gap-3 px-4 py-3 hover:bg-indigo-800 rounded-xl transition">
                Dashboard
            </a>

            <!-- Event -->
            <a href="/admin/events"
                class="flex items-center gap-3 px-4 py-3 hover:bg-indigo-800 rounded-xl transition">
                Kelola Event
            </a>

            <!-- Partner -->
            <a href="/admin/partners"
                class="flex items-center gap-3 px-4 py-3 hover:bg-indigo-800 rounded-xl transition">
                Partners
            </a>

            <!-- Categories -->
            <a href="/admin/categories"
                class="flex items-center gap-3 px-4 py-3 hover:bg-indigo-800 rounded-xl transition">
                Categories
            </a>

            <!-- Transactions -->
            <a href="/admin/transactions"
                class="flex items-center gap-3 px-4 py-3 hover:bg-indigo-800 rounded-xl transition">
                Transaksi
            </a>

        </nav>

        <!-- Logout -->
        <div class="pt-6 border-t border-indigo-800">

            <a href="/"
                class="flex items-center gap-3 px-4 py-3 text-indigo-300 hover:text-white transition">
                Keluar
            </a>

        </div>

    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

        <!-- Header -->
        <header class="bg-white shadow px-8 py-5 flex justify-between items-center">

            <h2 class="text-2xl font-bold">
                Admin Panel
            </h2>

            <div class="flex items-center gap-3">

                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center font-bold text-indigo-700">
                    A
                </div>

                <div>
                    <p class="font-bold">Admin</p>
                    <p class="text-sm text-slate-500">Administrator</p>
                </div>

            </div>

        </header>

        <!-- Content -->
        <main class="p-8">
            @yield('content')
        </main>

    </div>

</body>
</html>