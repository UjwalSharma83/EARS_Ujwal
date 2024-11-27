<?php

namespace Database\Seeders;

use App\Models\ProvidentFund;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvidentFundstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProvidentFund::create([
            'employee_id' => 1, // Reference to an existing employee
            'payroll_id' => 1, // Reference to an existing payroll record
            'provident_fund_amount' => 150.00, // Provident fund amount
            'created_at' => now(),
            'updated_at' => now(),
        ]);;
    }
}
