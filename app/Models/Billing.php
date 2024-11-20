<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile_number',
        'email',
        'billing_address',
        'event_type',
        'selected_package',
    ];

    // Define the relationship to BillingEquipment
    public function billingEquipments()
    {
        return $this->hasMany(BillingEquipment::class);
    }
}
