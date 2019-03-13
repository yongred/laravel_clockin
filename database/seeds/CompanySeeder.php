<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{

    public function run()
    {        
        $company = factory(Company::class, 10)->create();       
    }
}