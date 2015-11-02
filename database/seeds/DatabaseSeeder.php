<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ImagesManager\User;
use ImagesManager\Album;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		//because don't check foreignkey constraint
		Model::unguard();


		User::truncate();
		Album::truncate();

		$this->call('UserTableSeeder');
		$this->call('AlbumTableSeeder');

	}

}
