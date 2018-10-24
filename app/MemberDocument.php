<?php

namespace App;

use App\Member;
use App\MemberDocumentType;
use Illuminate\Database\Eloquent\Model;

class MemberDocument extends Model
{
    //
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function documentTypes()
    {
        return $this->hasMany(MemberDocumentType::class);
    }
}
