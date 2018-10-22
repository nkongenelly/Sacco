<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;


class Next_of_kin extends Model
{
    //
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
