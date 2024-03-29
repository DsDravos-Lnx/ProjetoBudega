<?php

use App\Stock;
use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Stock::class, 10)->create();
	}
}
