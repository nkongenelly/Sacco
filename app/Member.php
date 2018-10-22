<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Bank;
use App\Employer;

class Member extends Model
{
    //
    protected $guarded = [];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
