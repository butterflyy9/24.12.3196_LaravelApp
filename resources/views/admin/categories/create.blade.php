@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Tambah Kategori</h1>

    <div class="bg-white p-6 rounded shadow max-w-xl">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-2">Nama Kategori</label>
                <input type="text" name="name"
                    class="w-full border rounded px-4 py-2"
                    required>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded">
                Simpan
            </button>

            <a href="{{ route('admin.categories') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded ml-2">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection