<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTH Navbar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>
        .dropdown-menu {
            display: none;
        }
        .dropdown-menu.show {
            display: block;
        }
        .tooltip {
            position: absolute;
            color: white;
            padding: 5px;
            border-radius: 4px;
            font-size: 12px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s;
            bottom: 80%; /* Position above the element */
            left: 1%; /* Center horizontally */
            margin-bottom: 0px; /* Space between the element and tooltip */
            white-space: nowrap;
        }
        .relative:hover .tooltip {
            visibility: visible;
            opacity: 0.4;
            background-color: #be123c;
        }
    </style>
</head>
<!-- Navigation Bar -->
<header class="p-4 shadow-xl">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.jpeg') }}" alt="TTH Logo" class="h-16 mr-4 p-0">
        </div>
        <nav class="flex items-center">
            <a href="{{ route('landing') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">Home</a>
            <a href="{{ route('materials.index') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">Materials</a>
            <a href="{{ route('order.create') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">Book Order</a>
            <a href="{{ route('about') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">About Us</a>
            <a href="{{ route('contact.index') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">Contact Us</a>
        </nav>

        <div class="flex items-center">
            @auth
            <div class="relative inline-block text-left">
                <span class="tooltip">Click to expand more!</span>
                <span id="dropdownButton" class="text-black text-lg mr-4 cursor-pointer">Welcome {{ Auth::user()->name }}!
                </span>
                <div id="dropdownMenu" class="dropdown-menu absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg">
                    <form method="GET" action="{{ route('dashboard') }}" class="block">
                        <button type="submit" class="w-full text-left px-4 py-2 text-black text-lg hover:bg-rose-600 hover:text-white transition duration-300 rounded-t-lg">Dashboard</button>
                    </form>
                    <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-black text-lg hover:bg-rose-600 hover:text-white transition duration-300 rounded-b-lg">Logout</button>
                    </form>
                </div>
            </div>
            @else
                <a href="{{ route('login') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">Login</a>
                <a href="{{ route('register') }}" class="text-black text-lg py-2 px-4 rounded-md hover:bg-rose-600 hover:text-white transition duration-300">Register</a>
            @endauth
        </div>
    </div>
</header>
<script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            document.getElementById('dropdownMenu').classList.toggle('show');
        });

        // Close the dropdown if the user clicks outside of it
        window.addEventListener('click', function(e) {
            if (!document.getElementById('dropdownButton').contains(e.target) && !document.getElementById('dropdownMenu').contains(e.target)) {
                document.getElementById('dropdownMenu').classList.remove('show');
            }
        });
    </script>