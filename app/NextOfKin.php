<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;


class NextOfKin extends Model
{
    //
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
