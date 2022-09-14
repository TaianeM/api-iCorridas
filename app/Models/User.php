<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'stripe_id',
        'name',
        'cpf',
        'email',
        'celular',
        'active',
        'premium',
        'premium_date',
        'driver',
        'score',
        'total_proposal',
        'accepted_proposals',
        'cnh_url',
        'profile_picture_url',
        'cnh_approved',
        'password',
        'birthdate',
        'gender_id',
        'geo_state_id',
        'permission_id',
        'code_user',
        
    ];
  
    /**
     * Get the Gender that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gender()
    {
        return $this->belongsTo('App\Models\Gender', 'gender_id');
    }

       /**
     * Get the Geo State that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoState()
    {
        return $this->belongsTo('App\Models\GeoState', 'geo_state_id');
    }

   /**
     * Get the Permission that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permission()
    {
        return $this->belongsTo('App\Models\Permission', 'permission_id');
    }

 /**
  * Get all of the ride for the User
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function ride()
 {
     return $this->hasMany('App\Models\Ride', 'user_id');
 }

  /**
  * Get all of the CodeInvite for the User
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
  public function CodeInvite()
  {
      return $this->hasMany('App\Models\CodeInvite', 'user_id');
  }
 
}
