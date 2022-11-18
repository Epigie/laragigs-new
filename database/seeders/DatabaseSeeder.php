<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// \App\Models\User::factory(10)->create();

		$user = User::factory()->create([
			'name' => 'Andy Okay',
			'email' => 'andyokay@zedcv.com'
		]);
		Listing::factory(15)->create(
			[
				'user_id' => $user->id
			]
		);
	}
}