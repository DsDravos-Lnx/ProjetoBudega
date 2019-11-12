<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purshase extends Model
{
    protected $fillable = [
        'amount', 'price', 'credited', 'created_by', 'update_by',
    ];

    public function debtors() {
        return Purshase::all()->where('credited', '=', 1);
    }
}
