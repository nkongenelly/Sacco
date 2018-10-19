<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    //
    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public function savingType()
    {
        return $this->hasMany('App\SavingsType');
    }

}
