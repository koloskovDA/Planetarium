<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@planetarium.com',
            'password'   =>  Hash::make('AGHpJkMjR2'),
            'remember_token' =>  Str::random(10),
        ]);
    }
}
