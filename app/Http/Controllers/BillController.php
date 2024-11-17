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
        'mobile_number' => 'required|string|max:10',
        'email' => 'required|email',
        'billing_address' => 'required|string',
        'event_type' => 'required|string',
        'package' => 'required|string|in:standard-no-catering,deluxe-no-catering,deluxe-catering,custom',
        'quantity' => 'nullable|array', // The quantity array is optional
        'quantity.*' => 'nullable|numeric|min:0', // Each quantity must be a numeric value, greater than or equal to 0
    ]);
    
    
    // Check the posted data (for debugging)
    // dd($validatedData);

        // Assuming the data is being passed through the request (you can modify this based on your actual request structure)
        $name = $request->input('name');
        $mobile = $request->input('mobile_number');
        $email = $request->input('email');
        $eventType = $request->input('event_type');
        $selectedPackage = $request->input('package');
        $selectedEquipment = $request->input('selected_equipment');
        
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

        // If equipment is selected, calculate the total price based on quantities
        if ($selectedEquipment) {
            foreach ($selectedEquipment as $equipmentId => $quantity) {
                $equipment = Material::find($equipmentId);
                if ($equipment) {
                    $totalAmount += $equipment->price * $quantity;
                }
            }
        }

        // dd($validatedData);
        // dd($name, $mobile, $email, $eventType, $selectedPackage, $selectedEquipment, $totalAmount);
        // Return the view with the necessary data
        return view('order.bill', [
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email,
            'eventType' => $eventType,
            'selectedPackage' => $selectedPackage,
            'selectedEquipment' => $selectedEquipment,
            'totalAmount' => $totalAmount,
        ]);
    }
}

