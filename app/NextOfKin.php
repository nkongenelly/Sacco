<?php

namespace App;

use App\Member;
use Illuminate\Database\Eloquent\Model;

Class NextOfKin extends Model
{
    //
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
