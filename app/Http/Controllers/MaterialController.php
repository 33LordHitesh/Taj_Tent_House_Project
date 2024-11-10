<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    // Display the list of materials
    public function index()
    {
        $materials = Material::all(); // Fetch all materials from the database
        return view('materials.index', compact('materials'));
    }
}
