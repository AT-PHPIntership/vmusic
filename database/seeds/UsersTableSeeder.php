<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++){
        	DB::table('users')->insert([
        		'username' => $faker->unique()-> username,
        		'email' => $faker->unique()-> email,
        		'password' => bcrypt('12345678'),
        		'role_id' => rand(1, 2),
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
