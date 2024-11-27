<?php

namespace Database\Seeders;

use App\Models\SalaryStructure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaryStructurestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalaryStructure::create([
            'id' => 1,
            'salary_class' => 'A',
            'basic_salary' => 5000,
            'mobile_allowance' => 50,
            'medical_expenses' => 200,
            'houseRent_allowance' => 500,
            'total_salary' => 5750,
        ]);

        SalaryStructure::create([
            'id' => 2,
            'salary_class' => 'B',
            'basic_salary' => 4000,
            'mobile_allowance' => 100,
            'medical_expenses' => 400,
            'houseRent_allowance' => 600,
            'total_salary' => 5100,
        ]);

        SalaryStructure::create([
            'id' => 3,
            'salary_class' => 'C',
            'basic_salary' => 6000,
            'mobile_allowance' => 100,
            'medical_expenses' => 400,
            'houseRent_allowance' => 600,
            'total_salary' => 7100,
        ]);
    }
}
