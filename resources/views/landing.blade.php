<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTH - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
    <header class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl text-black font-bold">TTH</h1>
            <nav class="space-x-6">
                <a href="{{ route('landing') }}" class="text-black hover:text-blue-200">Home</a>
                <a href="{{ route('materials.index') }}" class="text-black hover:text-blue-200">Materials</a>
                <a href="{{ route('order.create') }}" class="text-black hover:text-blue-200">Book Order</a>
                <a href="{{ route('about') }}" class="text-black hover:text-blue-200">About Us</a>
                <a href="{{ route('contact.index') }}" class="text-black hover:text-blue-200">Contact Us</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <section class="text-center my-8">
            <h2 class="text-4xl font-semibold mb-4">Welcome to Taj Caterers and Tent House</h2>
            <p class="text-gray-700">Providing high-quality tents and event materials for weddings and family functions in Bhiwani, Haryana.</p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
            <!-- Materials Section -->
            <div class="p-4 border rounded-lg shadow-md bg-white">
                <h3 class="text-2xl font-semibold mb-2">Our Materials</h3>
                <p>Explore our collection of high-quality tents and other event essentials.</p>
                <a href="{{ route('materials.index') }}" class="text-blue-600 font-bold hover:underline mt-2 inline-block">View Materials</a>
            </div>

            <!-- Order Booking Section -->
            <div class="p-4 border rounded-lg shadow-md bg-white">
                <h3 class="text-2xl font-semibold mb-2">Book an Order</h3>
                <p>Ready to book? Select the materials you need, choose a date, and place an order easily.</p>
                <a href="{{ route('order.create') }}" class="text-blue-600 font-bold hover:underline mt-2 inline-block">Book Now</a>
            </div>

            <!-- About Section -->
            <div class="p-4 border rounded-lg shadow-md bg-white">
                <h3 class="text-2xl font-semibold mb-2">About Us</h3>
                <p>Learn more about our business and our dedication to making your events memorable.</p>
                <a href="{{ route('about') }}" class="text-blue-600 font-bold hover:underline mt-2 inline-block">Learn More</a>
            </div>
        </section>

        <section class="text-center my-8">
            <h3 class="text-2xl font-semibold mb-4">Have Questions?</h3>
            <p class="text-gray-700">Feel free to reach out to us with any inquiries or special requests.</p>
            <a href="{{ route('contact.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded mt-4 inline-block hover:bg-blue-700">Contact Us</a>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; {{ date('Y') }} Taj Caterers and Tent House. All rights reserved.</p>
    </footer>

</body>
</html>
