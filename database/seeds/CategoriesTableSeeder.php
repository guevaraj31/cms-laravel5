<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class, 29)->create();

    	App\User::create([
    		'name' => 'Jesus',
    		'email' => 'guevaraj31@gmail.com',
    		'password' => bcrypt('123')
    		]);
    }
}
