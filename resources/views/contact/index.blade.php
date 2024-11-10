@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Contact Us</h1>

    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block font-semibold">Name</label>
            <input type="text" id="name" name="name" class="border p-2 w-full" required>
        </div>

        <div>
            <label for="email" class="block font-semibold">Email</label>
            <input type="email" id="email" name="email" class="border p-2 w-full" required>
        </div>

        <div>
            <label for="message" class="block font-semibold">Message</label>
            <textarea id="message" name="message" class="border p-2 w-full" rows="4" required></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Send Message</button>
    </form>
</div>
@endsection
