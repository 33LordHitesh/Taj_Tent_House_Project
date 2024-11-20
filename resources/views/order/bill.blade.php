
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
<body>

    <h1>Your Bill</h1>

    <div class="customer-info">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Mobile:</strong> {{ $mobile }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Event Type:</strong> {{ $eventType }}</p>
    </div>

    @if ($selectedPackage)
    <h2>Package Details</h2>
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

        @if ($package)
            <p><strong>Selected Package:</strong> {{ $package->name }}</p>
            <p><strong>Description:</strong> {{ $package->description }}</p>
            <p><strong>Price:</strong> ₹{{ $package->price }}</p>
            
        @else
            <p>Package not found.</p>
        @endif
    @else
    <h2>Equipment Details</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($selectedItems))
                @foreach ($selectedItems as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>₹{{ $item['price'] }}</td>
                        <td>₹{{ $item['quantity'] * $item['price'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No equipment selected.</td>
                </tr>
            @endif
        </tbody>
    </table>
    @endif


    <p class="total-amount"><strong>Total Amount:</strong> ₹{{ $totalAmount }}</p>

    <!-- <div class="flex justify-center space-x-4 mt-6"> -->
    <!-- Confirm Order Button
    <form action="{{ route('order.create') }}" method="POST" class="inline">
        @csrf
        <button 
            type="submit" 
            class="px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition"
        >
            Confirm Order
        </button>
    </form> -->

    <!-- Back Button -->
    <!-- <a 
        href="{{ url()->previous() }}" 
        class="px-6 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition"
    >
        Back
    </a> -->
</div>

</body>
</html>