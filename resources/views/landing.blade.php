<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTH - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>
    .hero-section {
        background-image: url('/images/venue.jpeg');
        background-size: cover;
        background-position: center;
        min-height: 600px; /* Adjust height as needed */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .large-text {
    font-size: 80px;
    color: white;
    margin-bottom: 1rem; /* Adjust the margin as needed */
    }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
<x-navbar />

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <section class="text-center my-4 hero-section rounded-md">
        <p class="large-text mb-4 font-bold text-white">Welcome to Taj Caterers and Tent House</p>
            <!-- <img src="/images/wedding.jpeg" alt=""> -->
            <p class="text-white text-2xl">Providing high-quality tents and event materials for weddings and family functions</p>
        </section>

        <!-- <section class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8"> -->
            <!-- Materials Section -->
            <div class="flex items-center justify-around gap-4 p-4 border rounded-lg shadow-md bg-white mb-2">
                <!-- Content Block -->
                <div>
                    <h3 class="text-4xl font-semibold mb-2">Our Materials</h3>
                    <p>Explore our collection of high-quality tents and other event essentials.</p>
                    <a href="{{ route('materials.index') }}" class="text-blue-600 font-bold hover:underline mt-2 inline-block">View Materials</a>
                </div>
                <!-- Image Block -->
                <div class="w-1/2">
                    <img src="/images/catering.jpeg" alt="Event materials" class="rounded-lg shadow-md ">
                </div>
            </div>


            <!-- Order Booking Section -->
            <div class="flex items-center justify-around gap-4 p-4 border rounded-lg shadow-md bg-white mb-2">
                <!-- Image Block -->
                <div class="w-1/2">
                    <img src="/images/catering2.jpeg" alt="Event materials" class="rounded-lg shadow-md ">
                </div>
                <div>
                <h3 class="text-4xl font-semibold mb-2">Book an Order</h3>
                <p>Ready to book? Select the materials you need, choose a date, and place an order easily.</p>
                <a href="{{ route('order.create') }}" class="text-blue-600 font-bold hover:underline mt-2 inline-block">Book Now</a>
                </div>
            </div>

            <!-- About Section -->
            <div class="flex items-center justify-around gap-4 p-4 border rounded-lg shadow-md bg-white mb-2">
                <div>
                <h3 class="text-4xl font-semibold mb-2">About Us</h3>
                <p>Learn more about our business and our dedication to making your events memorable.</p>
                <a href="{{ route('about') }}" class="text-blue-600 font-bold hover:underline mt-2 inline-block">Learn More</a>
                </div>
                <!-- Image Block -->
                <div class="w-1/2">
                    <img src="/images/tent2.jpeg" alt="Event materials" class="rounded-lg shadow-md ">
                </div>
            </div>
        </section>

        <section class="text-center my-8">
            <h3 class="text-2xl font-semibold mb-4">Have Questions?</h3>
            <p class="text-gray-700">Feel free to reach out to us with any inquiries or special requests.</p>
            <a href="{{ route('contact.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded mt-4 inline-block hover:bg-rose-600">Contact Us</a>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; {{ date('Y') }} Taj Caterers and Tent House. All rights reserved.</p>
    </footer>  
</body>
</html>
