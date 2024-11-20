<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>
        /* You can include additional custom styles here if needed */
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center w-full max-w-md">
            <h1 class="text-3xl font-bold text-green-600 mb-4">Quotation Submitted Successfully!</h1>
            
            <p class="text-lg text-gray-700 mb-6">
                Your quotation has been forwarded. Please check your email for confirmation.
            </p>

            <p class="text-lg text-gray-700 mb-6">
                You will be redirected to your dashboard shortly. If you are not redirected, you can click the button below.
            </p>

            <!-- Back to Dashboard Button -->
            <a href="{{ route('dashboard') }}" class="inline-block px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">
                Go to Dashboard
            </a>

            <div class="mt-6">
                <p class="text-sm text-gray-500">
                    Need further assistance? Feel free to contact us at any time.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
