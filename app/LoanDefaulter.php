<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanDefaulter extends Model
{
    //
    public function loanPeriod()
    {
        return $this->belongsTo('App\LoanPeriod');
    }
}
