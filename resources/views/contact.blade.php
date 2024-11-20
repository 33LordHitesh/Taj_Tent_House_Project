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


<div class="contact-us flex flex-col items-center justify-center">
  <img src="{{ asset('images/logo2.png') }}" alt="TAJ Caterers & Tent House - Contact Us" class="w-20">
  <div class="contact-details">
  <div class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-8">
                <!-- Hero Section -->
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-gray-800">Taj Caterers & Tent House</h1>
                    <p class="text-lg text-gray-600 mt-4">Feel free to contact us regarding quotations and event inquiries. We’re here to make your events unforgettable!</p>
                </div>

                <!-- Contact Information -->
                <div class="mb-12">
                    <ul class="space-y-4">
                        <li class="text-lg text-gray-700">
                            <strong>Mobile:</strong> 
                            <a href="tel:9174677101" class="text-blue-500 hover:underline">+91-9174677101</a>
                        </li>
                        <li class="text-lg text-gray-700">
                            <strong>Email:</strong> 
                            <a href="mailto:taj33tents.business@gmail.com" class="text-blue-500 hover:underline">taj33tents.business@gmail.com</a>
                        </li>
                        <li class="text-lg text-gray-700">
                            <strong>Proprietor:</strong> Hitesh Kumar
                        </li>
                    </ul>
                </div>

                <!-- Callback Request Section -->
                <div class="callback-request text-center">
                    <p class="text-lg text-gray-700 mb-6">
                        Would you like to request a callback regarding any of our services? Click the button below, fill in your details, and we’ll get back to you within 24 hours (on business days).
                    </p>
                    <button 
                    type="button" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105"
                    onclick="document.getElementById('callbackModal').classList.remove('hidden');">
                    Request a Call
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Callback Modal -->
    <div id="callbackModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Request a Callback</h3>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2" for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your Message" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-lg mr-2" onclick="document.getElementById('callbackModal').classList.add('hidden');">Cancel</button>
                    <button type="submit" class="bg-blue-500 hover:bg-rose-600 text-white font-bold py-2 px-4 rounded-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>