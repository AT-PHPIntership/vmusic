<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Role::create([
            'name' => 'Admin',
            'created_at' => $faker->dateTimeThisYear('now')
        ]);
        Role::create([
            'name' => 'Guess',
            'created_at' => $faker->dateTimeThisYear('now')
        ]);
    }
}
