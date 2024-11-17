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



<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">About Us</h1>
    <p>
        Taj Caterers and Tent House has been serving Bhiwani, Haryana, for years, providing quality tents and materials for weddings and family functions.
    </p>
</div>




</body>
</html>