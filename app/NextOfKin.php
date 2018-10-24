<?php

namespace App;

use App\Member;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    //
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
