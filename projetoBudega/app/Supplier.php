<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
	protected $fillable = [
		'name', 'cnpj', 'address', 'contact',
	];

	protected $table = 'suppliers';

	public function stocks() {
		return $this->hasMany(Stock::class, 'stock_id');
	}

	public function searchByNames($name) {
		return Supplier::all()->where('name', 'like', $name);
	}
}
