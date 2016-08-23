<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 100; $i++){
        	DB::table('videos')->insert([
        		'name' => $faker-> word,
        		'link' => 'NangVaMua-BuiHaMy.mp4',
        		'status' => rand(0, 1),
        		'genre_id' => rand(1, 10),
        		'user_id' => rand(1, 10),
        		'singer_id' => rand(1, 10),
        		'topic_id' => rand(1, 10),
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
