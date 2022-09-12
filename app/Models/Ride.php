<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'from_address',
        'to_address',
        'init_lat',
        'init_long',
        'final_lat',
        'final_long',
        'run_date',
        'price',
        'driver_id',
        'user_confirmed',
        'driver_confirmed',
        'driver_payment_completed',
        'driver_payment_requested',
        'from_state_id',
        'to_state_id',
        'category_id',
        'stripe_payment_id',
        'in_transit',
        'vehicle_id',
        'active',
        'is_realtime',
        'payment_requested',
        'payment_completed',
        'payment_type_id'
    ];
        
    /**
     * Get the user that owns the Ride
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Ride', 'user_id');
    }

    /**
     * Get the Category that owns the Ride
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    /**
     * Get the PayType that owns the Ride
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentType()
    {
        return $this->belongsTo('App\Models\PaymentType', 'payment_type_id');
    }
}
