<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
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
        	DB::table('songs')->insert([
        		'name' => $faker-> word,
        		'link' => 'Blank Space - Taylor Swift.mp3',
        		'lyrics' => $faker-> text,
        		'status' => rand(0, 1),
        		'user_id' => rand(1, 10),
        		'genre_id' => rand(1, 10),
        		'singer_id' => rand(1, 10),
        		'album_id' => rand(1, 20),
        		'created_at' => $faker->dateTimeThisDecade($max = 'now')
        	]);
        }
    }
}
