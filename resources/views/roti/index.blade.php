@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h3 class="text-2xl font-bold text-center mb-6">Data Roti</h3>
    <a href="/roti/create" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Roti</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700 text-sm uppercase leading-normal">
                    <th class="py-3 px-6 text-left">No.</th>
                    <th class="py-3 px-6 text-left">Nama Roti</th>
                    <th class="py-3 px-6 text-left">Deskripsi</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @forelse ($roti as $index => $item)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $index + 1 }}</td>
                    <td class="py-3 px-6">{{ $item->nama_roti }}</td>
                    <td class="py-3 px-6">{{ $item->deskripsi }}</td>
                    <td class="py-3 px-6">
                        <a href="/roti/{{ $item->id }}/edit" class="text-blue-500">Edit</a>
                        <form action="/roti/{{ $item->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-3 px-6 text-center text-gray-500">Tidak ada data roti.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
