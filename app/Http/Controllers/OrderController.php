<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // Show the order booking page
    public function create()
    {
        $materials = DB::table('materials')->get(); // Get materials to display in the booking form
        return view('order.create', compact('materials'));
    }

    // Store a new order in the database
    public function store(Request $request)
    {
        $request->validate([
            'material_id' => 'required|exists:materials,id',
            'quantity' => 'required|integer|min:1',
            'event_date' => 'required|date',
            // Add any other validation rules as needed
        ]);

        Order::create([
            'user_id' => auth()->id(),
            'material_id' => $request->material_id,
            'quantity' => $request->quantity,
            'event_date' => $request->event_date,
            'total_amount' => $request->quantity * Material::find($request->material_id)->price,
        ]);

        return redirect()->route('order.payment')->with('success', 'Order placed successfully!');
    }

    // Show the payment page
    public function payment()
    {
        return view('order.payment');
    }
}
