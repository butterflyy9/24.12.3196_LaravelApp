@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Partner</h1>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-xl">
        <form action="{{ route('partners.update', $partner->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Nama Partner</label>
                <input type="text"
                       name="name"
                       value="{{ $partner->name }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Logo URL</label>
                <input type="text"
                       name="logo_url"
                       value="{{ $partner->logo_url }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <div class="mb-4">
                <img src="{{ $partner->logo_url }}"
                     class="w-28 h-28 object-cover rounded border">
            </div>

            <div class="flex gap-3">
                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded">
                    Update
                </button>

                <a href="{{ route('partners.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection