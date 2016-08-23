<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(SingersTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(SongsTableSeeder::class);
    }
}
