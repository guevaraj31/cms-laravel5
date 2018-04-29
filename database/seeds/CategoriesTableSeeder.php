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
    	factory(App\Category::class, 20)->create();

    	App\User::create([
    		'name' => 'Jesus',
    		'email' => 'guevaraj31@gmail.com',
    		'password' => bcrypt('123')
    		]);
    }
}
