<?php

use App\CreditedPay;
use Illuminate\Database\Seeder;

class CreditedPayTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(CreditedPay::class, 10)->create();
	}
}
