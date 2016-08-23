<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 20; $i++){
        	DB::table('albums')->insert([
        		'name' => $faker-> word,
        		'description' => $faker-> text,
        		'topic_id' => rand(1, 10),
        		'user_id' => rand(1, 10),
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
