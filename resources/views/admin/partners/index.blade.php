@extends('layouts.admin')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-6">Daftar Partner</h1>

    <!-- FORM SEARCH -->
    <form action="{{ route('partners.index') }}"
          method="GET"
          class="mb-4 flex gap-2">

        <input type="text"
               name="search"
               placeholder="Cari partner..."
               value="{{ request('search') }}"
               class="border px-4 py-2 rounded w-64">

        <button type="submit"
                class="bg-gray-700 text-white px-4 py-2 rounded">
            Search
        </button>

    </form>

    <!-- BUTTON TAMBAH -->
    <a href="{{ route('partners.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Tambah Partner
    </a>

    <!-- ALERT SUCCESS -->
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- TABEL -->
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

                @forelse($partners as $partner)

                <tr class="border-t">

                    <td class="p-4">
                        <img src="{{ $partner->logo_url }}"
                             alt="logo"
                             class="w-20 h-20 rounded object-contain bg-white p-2">
                    </td>

                    <td class="p-4">
                        {{ $partner->name }}
                    </td>

                    <td class="p-4">

                        <!-- BUTTON EDIT -->
                        <a href="{{ route('partners.edit', $partner->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded mr-2">
                            Edit
                        </a>

                        <!-- BUTTON DELETE -->
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

                @empty

                <tr>
                    <td colspan="3" class="p-4 text-center text-gray-500">
                        Data partner tidak ditemukan
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>
@endsection