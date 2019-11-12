<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'amount', 'type', 'created_by', 'update_by',
    ];
}
