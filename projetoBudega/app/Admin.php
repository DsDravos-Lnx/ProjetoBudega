<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'nome', 'email', 'login', 'password', 'created_by', 'update_by',
    ];
}
