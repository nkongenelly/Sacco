<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Expense_amount extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }
}
