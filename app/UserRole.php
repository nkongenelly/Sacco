<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
    
}
