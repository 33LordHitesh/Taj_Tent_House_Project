@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Available Materials</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($materials as $material)
            <div class="border p-4 rounded">
                <img src="{{ $material->image_url }}" alt="{{ $material->name }}" class="w-full h-48 object-cover">
                <h2 class="text-xl font-semibold mt-2">{{ $material->name }}</h2>
                <p class="text-gray-600">{{ $material->description }}</p>
                <p class="text-blue-600 font-bold">₹{{ $material->price }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
