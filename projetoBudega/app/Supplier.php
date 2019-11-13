<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
	protected $fillable = [
		'name', 'cpnj', 'address', 'contact',
	];

	protected $table = 'suppliers';

	public function stocks() {
		return $this->hasMany(Stock::class, 'stock_id');
	}
}
