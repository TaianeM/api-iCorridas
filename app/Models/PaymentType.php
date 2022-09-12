<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    /**
    * Get all of the ride for the paytype
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function ride()
    {
        return $this->hasMany('App\Models\Ride', 'payment_type_id');
    }

}
