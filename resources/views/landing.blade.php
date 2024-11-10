<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTH - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <div class="logo text-2xl font-bold">TTH</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ url('/') }}" class="text-blue-500 hover:underline">Home</a></li>
                    <li><a href="{{ url('/gallery') }}" class="text-blue-500 hover:underline">Gallery</a></li>
                    <li><a href="{{ url('/services') }}" class="text-blue-500 hover:underline">Services</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-blue-500 hover:underline">Contact Us</a></li>
                    <li><a href="{{ url('/about') }}" class="text-blue-500 hover:underline">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-cover bg-center h-96 flex items-center justify-center" style="background-image: url('path/to/your/image.jpg');">
        <div class="hero-content text-center bg-white bg-opacity-75 p-10 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold mb-4">Welcome to TTH</h1>
            <p class="text-lg mb-6">We specialize in Catering and Tent and related material supplies such as cooking utensils, tables, chairs, carpets, curtains, cutlery, and more. We are renowned for providing the best services in the city.</p>
            <button class="book-now bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Book Now</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow mt-10">
        <div class="container mx-auto p-4 flex flex-col items-center">
            <nav class="mb-4">
                <ul class="flex space-x-4">
                    <li><a href="{{ url('/') }}" class="text-blue-500 hover:underline">Home</a></li>
                    <li><a href="{{ url('/gallery') }}" class="text-blue-500 hover:underline">Gallery</a></li>
                    <li><a href="{{ url('/services') }}" class="text-blue-500 hover:underline">Services</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-blue-500 hover:underline">Contact Us</a></li>
                    <li><a href="{{ url('/about') }}" class="text-blue-500 hover:underline">About Us</a></li>
                </ul>
            </nav>
            <p>&copy; Hitesh 2024</p>
        </div>
    </footer>
</body>
</html>
