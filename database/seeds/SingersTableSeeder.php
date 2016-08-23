<?php

use Illuminate\Database\Seeder;

class SingersTableSeeder extends Seeder
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
        	DB::table('singers')->insert([
        		'name' => $faker-> word,
        		'infor' => $faker-> text,
        		'birthday' => $faker->dateTimeBetween('-40 years', '-18 years'),
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
