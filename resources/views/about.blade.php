<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTH - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
<x-navbar />

<div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Taj Caterers and Tent House</h1>
                    <p class="text-lg text-gray-600">Creating unforgettable moments with premium catering and event solutions.</p>
                </div>

                <section class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                    <p class="text-lg text-gray-700">
                        Our mission is to create extraordinary experiences for our clients by offering premium quality catering and tent services with a focus on impeccable service, customer satisfaction, and attention to detail. We aim to become the leading provider of event solutions, offering not just tents and food, but a seamless event experience that exceeds expectations.
                    </p>
                </section>

                <section class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Why Choose Us?</h2>
                    <ul class="list-disc list-inside text-lg text-gray-700">
                        <li><strong>Unmatched Expertise</strong>: With over 20 years of experience, we have been delivering exceptional service in the event industry.</li>
                        <li><strong>Customized Packages</strong>: Tailored packages for weddings, religious ceremonies, family events, and more.</li>
                        <li><strong>Quality and Hygiene</strong>: We provide high-quality ingredients for catering and premium tents, ensuring hygiene and safety.</li>
                        <li><strong>On-time Delivery and Setup</strong>: Everything will be set up on time, so you can enjoy your event stress-free.</li>
                        <li><strong>Affordable Prices</strong>: Offering top-tier services at competitive prices to suit all budgets.</li>
                    </ul>
                </section>

                <section class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Services</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Catering Services</h3>
                            <p class="text-lg text-gray-700">Delicious and diverse menus tailored to your event. From traditional to contemporary, we have it all!</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tent Setups</h3>
                            <p class="text-lg text-gray-700">Elegant and spacious tents for weddings, parties, and all outdoor events. Complete with decor and amenities.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Event Planning</h3>
                            <p class="text-lg text-gray-700">Our experts will help you plan every detail and make your event run smoothly, without any hassle.</p>
                        </div>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Meet Our Team</h2>
                    <div class="flex flex-wrap gap-8 justify-center">
                        <div class="w-80 bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Anil Sharma - Founder & CEO</h3>
                            <p class="text-lg text-gray-700">With a passion for food and event planning, Anil founded Taj Caterers and Tent House to offer the best catering and tent services to the community.</p>
                        </div>
                        <div class="w-80 bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Anju Sharma - Head of Event Planning</h3>
                            <p class="text-lg text-gray-700">Anju is a seasoned event planner who ensures that every event, large or small, is perfectly organized and memorable.</p>
                        </div>
                        <div class="w-80 bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Billu Halwai - Head Chef</h3>
                            <p class="text-lg text-gray-700">Billu Badmaash is an expert chef who creates mouthwatering dishes that will leave a lasting impression on your guests.</p>
                        </div>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Location</h2>
                    <p class="text-lg text-gray-700">
                        We are located in the heart of **Bhiwani, Haryana**. Our services are available throughout the region, and we also cater to destination events.
                    </p>
                </section>

                <section>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-lg text-gray-700 mb-4">We would love to be a part of your special occasion! Reach out to us for inquiries, quotes, or to schedule a consultation with our event planning team.</p>
                    <ul class="text-lg text-gray-700">
                        <li><strong>Address:</strong> Taj Caterers and Tent House, Main Road, Bhiwani, Haryana, India</li>
                        <li><strong>Phone:</strong> +91-9174677101</li>
                        <li><strong>Email:</strong> <a href="mailto: taj33tents.business@gmail.com" class="text-blue-500 hover:underline">info@tajcaterersandtents.com</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>



</body>
</html>