<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{

    public function run()
    {        
        $company = factory(Address::class, 40)->create();       
    }
}