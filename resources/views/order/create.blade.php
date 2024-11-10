@extends('layouts.app')
@section('content')

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Book Your Order</h1>

    <form action="{{ route('order.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="material_id" class="block font-semibold">Select Material</label>
            <select id="material_id" name="material_id" class="border p-2 w-full">
                @foreach($materials as $material)
                    <option value="{{ $material->id }}">{{ $material->name }} - ₹{{ $material->price }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="event_date" class="block font-semibold">Event Date</label>
            <input type="date" id="event_date" name="event_date" class="border p-2 w-full" required>
        </div>

        <div>
            <label for="quantity" class="block font-semibold">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="border p-2 w-full" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit Booking</button>
    </form>
</div>
@endsection
