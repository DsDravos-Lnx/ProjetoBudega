<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {
	protected $fillable = [
		'name', 'cpf', 'contact', 'address', 'gender', 'age',
	];

	protected $table = 'clients';

	public function purshases() {
		return $this->hasMany(Purshase::class, 'purshase_id');
	}

}
