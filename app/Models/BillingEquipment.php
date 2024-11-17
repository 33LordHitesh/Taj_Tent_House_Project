<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingEquipment extends Model
{
    use HasFactory;

    protected $fillable = ['billing_id', 'material_id', 'quantity', 'price'];

    public function billing()
    {
        return $this->belongsTo(Billing::class);
    }
}
