@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Daftar Partner</h1>

    <a href="{{ route('partners.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Tambah Partner
    </a>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 text-left">Logo</th>
                    <th class="p-4 text-left">Nama</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($partners as $partner)
                <tr class="border-t">
                    <td class="p-4">
                        <img src="{{ $partner->logo_url }}" alt="logo" class="w-20 h-20 rounded object-cover">
                    </td>
                    <td class="p-4">
                        {{ $partner->name }}
                    </td>
                    <td class="p-4">
                        <a href="{{ route('partners.edit', $partner->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded mr-2">
                            Edit
                        </a>

                        <form action="{{ route('partners.destroy', $partner->id) }}"
                        method="POST"
                        class="inline"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus partner ini?')">
    @csrf
    @method('DELETE')

    <button type="submit"
            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
        Hapus
    </button>
</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection