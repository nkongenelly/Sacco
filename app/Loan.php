<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //defines the relationship of loan statuses having many loans
     public function loanStatuses()
    {
        return $this->belongsTo('App\LoanStatus');
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
    public function loanPayments()
    {
        return $this->belongsTo('App\LoanPayment');
    }
}
