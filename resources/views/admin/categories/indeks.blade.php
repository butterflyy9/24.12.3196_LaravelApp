@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Manajemen Kategori</h1>
    
    <!-- FORM SEARCH -->
<form action="{{ route('admin.categories') }}"
      method="GET"
      class="mb-4 flex gap-2">

    <input type="text"
           name="search"
           placeholder="Cari kategori..."
           value="{{ request('search') }}"
           class="border px-4 py-2 rounded w-64">

    <button type="submit"
            class="bg-gray-700 text-white px-4 py-2 rounded">
        Search
    </button>

</form>

    <a href="{{ route('categories.create') }}" class="mb-4 inline-block px-4 py-2 bg-indigo-600 text-white rounded">
        + Tambah Kategori
    </a>

    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Nama Kategori</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $category->name }}</td>
                <td class="p-2">
                    <a href="{{ route('categories.edit', $category->id) }}"
                       class="px-2 py-1 bg-yellow-400 rounded">
                        Edit
                    </a>

                    <form action="{{ route('categories.destroy', $category->id) }}"
                          method="POST"
                          class="inline"
                          onsubmit="return confirm('Apakah anda yakin ingin menghapus kategori ini?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection