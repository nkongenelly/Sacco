<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoanType;
use App\Member;
use App\LoanStatus;
use App\LoanGuarantor;
use App\LoanDefaulter;
use App\LoanPayment;

class Loan extends Model
{
    protected $guarded = [];
    //defines the relationship of loan statuses having many loans
     public function loanStatus()
    {
        return $this->belongsTo('App\LoanStatus');
    }
    public function loanType()
    {
        return $this->belongsTo('App\LoanType');
    }
    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    //defines the relationship of a loan having many guarantors
    public function loanGuarantors()
    {
        return $this->hasMany('App\LoanGuarantor');
    }
   
    //defines the relationship of  a loan having many defaultors

    public function loanDefauters()
    {
        return $this->hasMany('App\LoanDefaulter');
    }

    //defines the relationship of a loan having many loan payments
    public function loanPayment()
    {
        return $this->belongsTo('App\LoanPayment');
    }
}
