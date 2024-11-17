<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Material;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// $packages = Package::all();

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
        // Step 1: Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'billing_address' => 'required|string',
            'event_type' => 'required|string',
            'selected_package' => 'nullable|string',  // Only if event_type is wedding
            'quantity' => 'array',  // If equipment is selected, it will be an array of quantities
            'quantity.*' => 'integer|min:0'  // Each quantity should be an integer >= 0
        ]);

        // Step 2: Store the main billing record
        $billing = Billing::create([
            'name' => $validated['name'],
            'mobile_number' => $validated['mobile_number'],
            'email' => $validated['email'],
            'billing_address' => $validated['billing_address'],
            'event_type' => $validated['event_type'],
            'selected_package' => $validated['event_type'] === 'wedding' ? $validated['selected_package'] : null
        ]);

        // Step 3: Store equipment data if event type is not 'wedding'
        if ($validated['event_type'] !== 'wedding' && isset($validated['quantity'])) {
            foreach ($validated['quantity'] as $materialId => $quantity) {
                if ($quantity > 0) {
                    // Get the material price (assuming you have a materials table)
                    $material = Material::find($materialId);

                    if ($material) {
                        BillingEquipment::create([
                            'billing_id' => $billing->id,
                            'material_id' => $material->id,
                            'quantity' => $quantity,
                            'price' => $material->price
                        ]);
                    }
                }
            }
        }

        // Step 4: Redirect to a 'thank you' or summary page
        return redirect()->route('thank.you')->with('message', 'Event booked successfully!');
    }

    public function showBill(Request $request)
{

    // *******************************************************************************************
    // *******************************************************************************************
    // Validate the form data
    // $validatedData = $request->validate([
    //     'name' => 'required|string|max:255',
    //     'mobile_number' => 'required|string|max:15',
    //     'email' => 'required|email',
    //     'billing_address' => 'required|string',
    //     'event_type' => 'required|string',
    //     'package' => 'required|string|in:standard-no-catering,deluxe-no-catering,deluxe-catering,custom',
    //     'quantity' => 'nullable|array', // The quantity array is optional
    //     'quantity.*' => 'nullable|numeric|min:0', // Each quantity must be a numeric value, greater than or equal to 0
    // ]);
    
    
    // // Check the posted data (for debugging)
    // dd($validatedData);
    // *******************************************************************************************
    // *******************************************************************************************
    

    // Retrieve form data
    $name = $request->input('name');
    $mobile = $request->input('mobile_number');
    $email = $request->input('email');
    $eventType = $request->input('event_type');
    $selectedPackage = $request->input('package');
    $selectedEquipment = $request->input('equipment', []); // Ensure it's an array even if empty


// Print the data to the console
echo "Name: " . $name . "\n";
echo "Mobile Number: " . $mobile . "\n";
echo "Email: " . $email . "\n";
echo "Event Type: " . $eventType . "\n";
echo "Selected Package: " . $selectedPackage . "\n";

// Print the selected equipment
echo "Selected Equipment:\n";
foreach ($selectedEquipment as $equipment) {
    echo "- " . $equipment . "\n";
}
    // Calculate total amount
    $totalAmount = 0;

    if ($selectedPackage) {
        // Calculate based on package price (assuming you have a Package model)
        $package = Package::findOrFail($selectedPackage);
        // $package = DB::table('packages')->findOrFail($selectedPackage);
        $totalAmount = $package->price;
    } else {
        // Calculate based on selected equipment
        foreach ($selectedEquipment as $equipmentId => $quantity) {
            $equipment = Equipment::find($equipmentId);
            $totalAmount += $equipment->price * $quantity;
        }
    }

    // Pass data to the view
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

    // Show the payment page
    public function payment()
    {
        return view('order.payment');
    }
}
