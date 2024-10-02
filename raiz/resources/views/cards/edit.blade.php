@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-6">Editar Card</h1>

    <form action="{{ route('cards.update', $card->id) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700" for="image">Imagen (opcional para editar)</label>
            <input type="file" name="image" id="image" class="mt-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:outline-none">
            @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700" for="title">Título (opcional)</label>
            <input type="text" name="title" id="title" class="w-full mt-2 p-2 border border-gray-300 rounded-lg" value="{{ old('title', $card->title) }}">
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700" for="description">Descripción (opcional)</label>
            <textarea name="description" id="description" class="w-full mt-2 p-2 border border-gray-300 rounded-lg">{{ old('description', $card->description) }}</textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded">Actualizar Card</button>
        </div>
    </form>
</div>
@endsection
