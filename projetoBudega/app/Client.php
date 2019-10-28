<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
      'name', 'cpf', 'contact', 'address', 'gender', 'age', 
    ];
}
