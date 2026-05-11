@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Manajemen Kategori</h1>

    <button class="mb-4 px-4 py-2 bg-indigo-600 text-white rounded">
        + Tambah Kategori
    </button>

    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Nama Kategori</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-2">1</td>
                <td class="p-2">Seminar</td>
                <td class="p-2">
                    <button class="px-2 py-1 bg-yellow-400 rounded">Edit</button>
                    <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                </td>
            </tr>
            <tr>
                <td class="p-2">2</td>
                <td class="p-2">Konser</td>
                <td class="p-2">
                    <button class="px-2 py-1 bg-yellow-400 rounded">Edit</button>
                    <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                </td>
            </tr>
            <tr>
                <td class="p-2">3</td>
                <td class="p-2">Workshop</td>
                <td class="p-2">
                    <button class="px-2 py-1 bg-yellow-400 rounded">Edit</button>
                    <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection