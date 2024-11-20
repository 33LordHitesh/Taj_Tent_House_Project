<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Material;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function showBill(Request $request)
    {

        // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'mobile_number' => 'required|string|max:11',
        'email' => 'required|email',
        'billing_address' => 'required|string',
        'event_type' => 'required|string',
        'package' => 'nullable|string|in:standard-no-catering,deluxe-no-catering,deluxe-catering,custom',
        'quantity' => 'nullable|array', // The quantity array is optional
        'quantity.*' => 'nullable|numeric|min:0', // Each quantity must be a numeric value, greater than or equal to 0
        'selected_items' => 'nullable|array', // The selected_items array is required
        'selected_items.*' => 'exists:materials,id', // Each selected item must exist in the materials table
    ]);
    // Check the posted data (for debugging)
    // dd($validatedData); 

        // Assuming the data is being passed through the request (you can modify this based on your actual request structure)
        $name = $request->input('name');
        $mobile = $request->input('mobile_number');
        $email = $request->input('email');
        $eventType = $request->input('event_type');
        $selectedPackage = $request->input('package');
        $selectedItems = $request->input('selected_items',[]);
        $quantities = $request->input('quantity', []); // Default to an empty array if no quantities are provided
        // dd($quantities);
        $selectedItemsWithQuantities = [];
        foreach ($selectedItems as $itemId) {
            $selectedItemsWithQuantities[] = [
                'id' => $itemId,
                'quantity' => isset($quantities[$itemId]) ? $quantities[$itemId] : 0, // Use 0 if no quantity is provided
            ];
        }
        // dd($selectedItemsWithQuantities);
        
        // Retrieve the package details from the Package model if selected
        if ($selectedPackage) {
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
            $package = Package::where('id', $tempId)->first();
        } else {
            $package = null;
        }

        // Calculate the total amount for the bill
        $totalAmount = 0;

        // If a package is selected, include its price
        if ($package) {
            $totalAmount += $package->price;
        }

        // If item is selected, calculate the total price based on quantities
        if ($selectedItemsWithQuantities) {
            $materialIds = array_column($selectedItemsWithQuantities, 'id');
            $materials = \DB::table('materials')->whereIn('id', $materialIds)->get()->keyBy('id');
            // $totalAmount = 0;
            foreach ($selectedItemsWithQuantities as $item) {
                $material = $materials->get($item['id']);
                if ($material) {
                    $totalAmount += $material->price * $item['quantity'];
                }
            }
        }
        // dd($selectedItemsWithQuantities);

        $selectedItemsWithDetails = [];
        if ($selectedItemsWithQuantities) {
            foreach ($selectedItemsWithQuantities as $item) {
                $material = \App\Models\Material::find($item['id']);
                if ($material) {
                    $selectedItemsWithDetails[] = [
                        'name' => $material->name,
                        'quantity' => $item['quantity'],
                        'price' => $material->price,
                        'total' => $material->price * $item['quantity'],
                    ];
                }
            }
        }
        // dd($selectedItemsWithDetails); 

        // Return the view with the necessary data
        return view('order.bill', [
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email,
            'eventType' => $eventType,
            'selectedPackage' => $selectedPackage,
            'selectedItems' => $selectedItemsWithDetails, // Structured selected items data
            'totalAmount' => $totalAmount,
        ]);
    }
}

