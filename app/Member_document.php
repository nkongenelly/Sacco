<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
use App\Document_type;

class Member_document extends Model
{
    //
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function documentTypes()
    {
        return $this ->hasMany(Document_type::class);
    }
}
