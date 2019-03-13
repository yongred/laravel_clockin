<?php

use App\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {        
        $employee = factory(User::class, 10)->create();       
    }
}