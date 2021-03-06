<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
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
        	DB::table('genres')->insert([
        		'name' => $faker-> word,
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
