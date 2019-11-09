<?php

use App\Credited;
use Illuminate\Database\Seeder;

class CreditedPaySeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Credited::class, 10)->create();
	}
}
