<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ExpenseAmount extends Model
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
