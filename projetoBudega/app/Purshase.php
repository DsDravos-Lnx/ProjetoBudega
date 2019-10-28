<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purshase extends Model
{
    protected $fillable = [
        'amount', 'price', 'credited', 
    ];
}
