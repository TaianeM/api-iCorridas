<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    /**
  * Get all of the ride for the category
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function ride()
 {
     return $this->hasMany('App\Models\Ride', 'category_id');
 }


}
