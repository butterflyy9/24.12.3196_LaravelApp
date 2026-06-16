@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Kategori</h1>

    <div class="bg-white p-6 rounded shadow max-w-xl">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-2">Nama Kategori</label>
                <input type="text" name="name"
                    value="{{ $category->name }}"
                    class="w-full border rounded px-4 py-2"
                    required>
            </div>

            <button type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

            <a href="{{ route('admin.categories') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded ml-2">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection