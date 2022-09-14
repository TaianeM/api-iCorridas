<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeInvite extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_invite',
        'sale_invite',
        'sale_user',
        'sale_driver',
        'user_id' 
    ];

  /**
  * Get all of the CodeInvite for the User
  *
  * @return \Illuminate\Database\Eloquent\Relations\belongsTo
  */
  public function CodeInvite()
  {
      return $this->belongsTo('App\Models\CodeInvite', 'user_id');
  }
 
}
