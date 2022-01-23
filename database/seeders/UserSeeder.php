<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'names' => 'Admin Master',
            'email' => 'test@example.com',
            'document' => '10988080810',
            'telephone' => '3123332221',
            'slug' => 'nothing',
            'password' => Hash::make('password')
        ])/* ->syncRoles(['admin'])*/;

        User::factory(10)->create();
    }
}
