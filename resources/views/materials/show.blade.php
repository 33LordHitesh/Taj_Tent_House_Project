<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $material->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <x-navbar />
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold my-4">Equipment Details</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-row">
            <img src="{{ $material->image_url }}" class="w-1/2 object-cover" alt="{{ $material->name }}">
            <div class="p-4 ml-4">
                <h5 class="text-xl font-semibold">{{ $material->name }}</h5>
                <p class="text-gray-700">{{ $material->description }}</p>
                <p class="text-gray-900 font-semibold">Price: ₹{{ $material->price }}</p>
                <p class="text-gray-900 font-semibold">Stock: {{ $material->stock }}</p>
                <a href="{{ route('materials.index') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">Back to Materials</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
