<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'names' => 'test 1',
            'lastnames' => 'test 1',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $user = User::create([
            'names' => 'test 2',
            'lastnames' => 'test 2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('654321'),
        ]);
    }
}
