<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditedPay extends Model
{
    protected $fillable = [
        'credited', 'created_by', 'update_by',
      ];
}
