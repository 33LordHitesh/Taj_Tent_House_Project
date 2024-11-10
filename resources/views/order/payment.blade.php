@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Payment</h1>
    <p>Please follow the instructions below to complete your payment:</p>

    <ul class="list-disc list-inside">
        <li>Pay via bank transfer to the provided account details.</li>
        <li>Once payment is confirmed, you will receive a confirmation email.</li>
    </ul>

    <div class="mt-4">
        <h2 class="font-semibold">Order Status: <span class="text-blue-600">Pending</span></h2>
    </div>
</div>
@endsection
