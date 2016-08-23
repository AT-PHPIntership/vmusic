<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
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
        	DB::table('topics')->insert([
        		'name' => $faker-> word,
        		'description' => $faker-> text,
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
