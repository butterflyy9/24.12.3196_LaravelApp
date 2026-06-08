<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-6">
            Login Admin
        </h1>

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Masukkan email"
                    required>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Masukkan password"
                    required>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                Login
            </button>
        </form>
    </div>

</body>
</html>