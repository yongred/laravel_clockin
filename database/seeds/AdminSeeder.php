<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{

    public function run()
    {        
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@live.com',
            'phone' => '123-123-1234',
            'password' => bcrypt('secret'),
            'role_id' => 3,
            'active' => 1,
            'remember_token' => Str::random(10),
        ]);        
    }
}
