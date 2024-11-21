<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .hover-image{
        transform: scale(1.05); /* Initially zoom the image to 125% */
        transition: transform 0.3s ease; /* Smooth transition effect */
        }
        .hover-image:hover{
        transform: scale(1); /* Reset the image scale on hover */
        }
    </style>
</head>
<body class="bg-gray-100">
    <x-navbar />
    <!-- Navbar above -->
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold my-4">Materials & Equipment</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($materials as $material)
                <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col justify-between">
                    <div class="relative w-full h-96">
                        <img src="{{ $material->image_url }}" class="hover-image object-cover w-full h-full" alt="{{ $material->name }}">
                    </div>
                    <div class="p-4"> 
                        <h5 class="text-xl font-semibold">{{ $material->name }}</h5>
                        <p class="text-gray-700">{{ $material->description }}</p>
                        <span class="flex justify-around items-center">
                            <p class="text-gray-900 font-semibold">Price: ₹{{ $material->price }}</p>
                            <p class="text-gray-900 font-semibold">Stock: {{ $material->stock }}</p>
                        </span>
                        <a href="{{ route('materials.show', $material->id) }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">More Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
