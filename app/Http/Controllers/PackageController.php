<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Package;

class PackageController extends Controller
{
    //getter function for packages
    public function getPackages()
    {
        $packages = DB::table('packages')->get(); // Fetch all packages
        return $packages;
    }
}
