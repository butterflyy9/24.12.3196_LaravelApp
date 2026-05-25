@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-6">Tambah Partner</h1>

    <form action="{{ route('partners.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <div class="mb-4">
            <label class="block font-medium">Nama Partner</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Logo URL</label>
            <input type="text" name="logo_url" class="w-full border rounded p-2" value="https://placehold.co/200x200" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>
</div>
@endsection