<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purshase extends Model
{
    protected $fillable = [
        'amount', 'price', 'credited', 'client_id', 'product_id',
    ];

    protected $table = 'purshases';

    public function client() {
        return $this->hasOne(Client::class, 'client_id');
    }

    public function debtors() {
        return Purshase::all()->where('credited', '=', 1);
    }


}
