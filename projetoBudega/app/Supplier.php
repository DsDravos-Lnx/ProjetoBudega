<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'cpnj', 'address', 'contact', 'created_by', 'update_by',
    ];
}
