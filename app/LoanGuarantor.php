<?php

namespace App;

use App\Loan;
use App\Member;
use Illuminate\Database\Eloquent\Model;

class LoanGuarantor extends Model
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
