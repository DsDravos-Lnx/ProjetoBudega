<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purshase extends Model {
	protected $fillable = [
		'amount', 'price', 'credited', 'client_id', 'product_id',
	];

	protected $table = 'purshases';

	public function debtors() {
		return Purshase::all()->where('credited', '=', 1);
	}

	public function withoutPay($id) {
		return Purshase::all()->where('credited', '=', 0)->where('client_id', '=', $id);
	}

	public function products() {
		return $this->hasMany(Product::class, 'product_id');
	}

	public function clients() {
		return $this->belongsTo(Client::class, 'client_id');
	}

	public function creditedPay() {
		return $this->belongsTo(CreditedPay::class, 'creditedPay_id');
	}

}
