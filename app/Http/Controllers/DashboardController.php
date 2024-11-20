<?php
namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the 5 most recent orders from the Billing table
        $recentOrders = DB::table('billings')
                    ->latest()   // Order by the 'created_at' column by default (can be changed if needed)
                    ->take(5)    // Limit to 5 recent orders
                    ->get()
                    ->map(function ($order) {
                        if ($order->created_at instanceof \DateTime) {
                            // Format if it's already a DateTime object
                            $order->created_at = $order->created_at->format('Y-m-d H:i:s');
                        } else {
                            // If it's a string, parse it and then format
                            $order->created_at = Carbon::parse($order->created_at)->format('Y-m-d H:i:s');
                        }
                        return $order;
                    });

        // Return the view with the data
        // return view('dashboard', compact('recentOrders')); // Passing 'recentOrders' to the view
        // dd($recentOrders);
        return view('dashboard', ['recentOrders' => $recentOrders]);
    }
}
