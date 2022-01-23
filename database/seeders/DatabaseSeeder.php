<?php

namespace Database\Seeders;

use App\Models\Cases;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();


        // $this->call(RoleSeeder::class);
        Course::factory(9)->create();
        $this->call(UserSeeder::class);
        Cases::factory(7)->create();
    }
}
