<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Loan;
use App\Member;

class Loan_guarantor extends Model
{
    //
    protected $guarded = [];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
