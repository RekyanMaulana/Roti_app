@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h3 class="text-2xl font-bold text-center mb-6">Edit Roti</h3>
    <form action="/roti/{{ $roti->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Nama Roti</label>
            <input type="text" name="nama_roti" value="{{ $roti->nama_roti }}" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" class="w-full px-4 py-2 border rounded">{{ $roti->deskripsi }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
