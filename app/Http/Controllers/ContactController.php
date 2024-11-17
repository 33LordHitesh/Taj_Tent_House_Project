<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    // Show the contact page
    public function index()
    {
        return view('contact');
    }

    public function storeCallback(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'event_type' => 'required|string',
            'message' => 'nullable|string',
        ]);

        CallbackRequest::create($validatedData);

        // You might want to add a success message or redirect to a thank you page
        return redirect()->back()->with('success', 'Callback request submitted successfully.');
    }
}
