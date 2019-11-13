<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $fillable = [
		'name', 'description', 'image', 'price', 'available',
	];

	protected $table = 'products';

	public function stocks() {
		return $this->belongsTo(Stock::class, 'stock_id');
	}

	public function purshases() {
		return $this->belongsTo(Purshase::class, 'purshase_id');
	}
}
