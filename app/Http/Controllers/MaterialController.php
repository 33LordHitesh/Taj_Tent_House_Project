<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    // Display the list of materials
    public function index()
    {
        $materials = DB::table('materials')->get();
        return view('materials.index', compact('materials'));
    }
    // Show a single material detail
    public function show($id)
    {
    $material = DB::table('materials')->where('id', $id)->first();
    
    if (!$material) {
        abort(404, 'Material not found');
    }

    return view('materials.show', compact('material'));
    }
    // Getter function to get materials
    public function getMaterials()
    {
        $materials = DB::table('materials')->get(); // Fetch all materials
    return $materials;
    }

}
