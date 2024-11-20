
<!DOCTYPE html>
<html>
<head>
    <title>Your Bill</title>
    <style>
        /* Basic CSS styles for formatting */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <x-navbar />

    <div class="flex justify-center items-center h-20">
    <h1 class="text-3xl font-bold text-rose-600">Your Quotation</h1>
    </div>
    <div class="flex justify-center">
    <section class="quotation-slip bg-slate-200 p-4 rounded-lg m-4 shadow-md w-3/4">
    <div class="flex justify-center w-full">
    <div class="customer-info bg-white p-6 rounded-lg shadow-md mb-6 w-1/2">
        <p class="mb-2"><strong>Name:</strong> {{ $name }}</p>
        <p class="mb-2"><strong>Mobile:</strong> {{ $mobile }}</p>
        <p class="mb-2"><strong>Email:</strong> {{ $email }}</p>
        <p class="mb-2"><strong>Event Type:</strong> {{ $eventType }}</p>
    </div>
    </div>  


    @if ($selectedPackage)
    <h2 class="text-2xl font-semibold mb-4 text-gray-700 text-center justify-center items-center">Package Details</h2>
    @php
        // Retrieve the selected package from the database using the Package model
        $tempId = 0;
            switch ($selectedPackage) {
                case 'standard-no-catering':
                    $tempId = 1;
                    break;
                case 'deluxe-no-catering':
                    $tempId = 2;
                    break;
                case 'deluxe-catering':
                    $tempId = 3;
                    break;
                default: 0;
                    break;
            }
            $package = \App\Models\Package::where('id', $tempId)->first();
    @endphp
            <div class="flex justify-center">
        @if ($package)
        <div class="bg-white p-6 rounded-lg shadow-md mb-6 w-1/2">
                <p class="mb-2"><strong>Selected Package:</strong> {{ $package->name }}</p>
                <p class="mb-2"><strong>Description:</strong> {{ $package->description }}</p>
                <p class="mb-2"><strong>Price:</strong> ₹{{ $package->price }}</p>
            </div>
        @else
            <p class="text-red-600">Package not found.</p>
        @endif
        </div>
    @else
    <h2 class="text-2xl font-semibold mb-4 text-gray-700 text-center justify-center items-center">Equipment Details</h2>
    <div class="overflow-x-auto flex justify-center">
    <table class="table-auto bg-white shadow-md rounded-lg mb-6 w-1/2">
        <thead>
            <tr>
                <th class="px-4 py-2 bg-gray-200">Item</th>
                <th class="px-4 py-2 bg-gray-200">Quantity</th>
                <th class="px-4 py-2 bg-gray-200">Price</th>
                <th class="px-4 py-2 bg-gray-200">Total</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($selectedItems))
                @foreach ($selectedItems as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="border px-4 py-2">{{ $item['name'] }}</td>
                        <td class="border px-4 py-2">{{ $item['quantity'] }}</td>
                        <td class="border px-4 py-2">₹{{ $item['price'] }}</td>
                        <td class="border px-4 py-2">₹{{ $item['quantity'] * $item['price'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="border px-4 py-2 text-center text-gray-500">No equipment selected.</td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
    @endif

    <div class="flex justify-center">
    <p class="total-amount font-semibold text-lg mt-4 bg-white p-4 shadow-md rounded-lg text-center justify-center w-1/2">
        <strong>Total Amount:</strong> ₹{{ $totalAmount }}
    </p>
    </div>
    </section>
    </div>

    <!-- More buttons -->
    <div class="flex justify-center ">
        <div class="p-4 rounded-lg m-4 shadow-md w-3/4 flex justify-center">
            <div class="flex justify-around w-1/2">
                <button onclick="alert('Quotation forwarded. Check your email. Redirecting to your dashboard'); window.location.href='/dashboard';" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Confirm Order</button>
                <button onclick="if(confirm('Are you sure?')) { window.location.href='/order'; }" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Reset Order</button>
            </div>
        </div>
    </div>
</body>
</html>