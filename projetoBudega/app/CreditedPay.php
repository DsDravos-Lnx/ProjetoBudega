<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditedPay extends Model
{
    protected $fillable = [
        'credited', 'purshase_id',
      ];

      protected $table = 'credited_pays';

      public function purshase(){
        return $this->hasOne(Purshase::class, 'purshase_id');
      }
}
