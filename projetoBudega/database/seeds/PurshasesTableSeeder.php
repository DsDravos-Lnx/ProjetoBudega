<?php

use App\Purshase;
use Illuminate\Database\Seeder;

class PurshaseTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Purshase::class, 10)->create();
	}
}
