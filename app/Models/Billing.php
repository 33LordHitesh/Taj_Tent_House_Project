<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mobile_number', 'email', 'billing_address', 'event_type', 'selected_package'];

    public function equipment()
    {
        return $this->hasMany(BillingEquipment::class);
    }
}
