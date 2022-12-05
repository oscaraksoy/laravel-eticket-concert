<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Company::count() == 0) {
            $companies = Company::factory(10)->make();

            Company::insert($companies->toArray());
        }
    }
}
