<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'stock', 
        'image_url',
        // Add the columns that are part of the table
        'Cat', 
        'Cat_code'
    ];

    // Optionally, you can add any relationships if they exist (like a belongsTo relationship with a Package model)
    public function package()
    {
        return $this->belongsTo(Package::class);  // Assuming each material belongs to one package
    }
}
