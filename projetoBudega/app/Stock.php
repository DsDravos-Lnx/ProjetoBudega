<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {
	protected $fillable = [
		'amount', 'type', 'product_id', 'supplier_id',
	];

	protected $table = 'stocks';

	public function products() {
		return $this->hasMany(Product::class, 'product_id');
	}

	public function suppliers() {
		return $this->belongsTo(Supplier::class, 'supplier_id');
	}
}
