<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = ['name', 'description', 'price', 'catering_included'];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
