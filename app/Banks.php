<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    //
    public function members()
    {
        return $this->hasMany('App\Member');
    }

    public function bankBranches()
    {
        return $this->hasMany('App\BankBranch');
    }
}
