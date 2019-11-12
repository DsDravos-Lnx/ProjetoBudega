<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nome', 'description', 'image', 'price', 'available', 'created_by', 'update_by',
    ];
}
