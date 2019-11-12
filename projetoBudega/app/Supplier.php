<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'cpnj', 'address', 'contact',
    ];

    protected $table = 'suppliers';
}
