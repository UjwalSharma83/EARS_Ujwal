<?php

namespace Database\Seeders;

use App\Models\Payroll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayrollstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payroll::create([
            'employee_id' => 1, // Reference to an existing employee
            'salary_structure_id' => 1, // Reference to an existing salary structure
            'deduction' => 100.50,
            'total_payable' => 2500.00,
            'reason' => 'Late submission of reports',
            'year' => '2024',
            'month' => 'January',
            'date' => '2024-01-31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Payroll::create([
        //     'employee_id' => 2,
        //     'salary_structure_id' => 2,
        //     'deduction' => 50.00,
        //     'total_payable' => 3000.00,
        //     'reason' => 'Unpaid leave deduction',
        //     'year' => '2024',
        //     'month' => 'February',
        //     'date' => '2024-02-28',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Payroll::create([
        //     'employee_id' => 3,
        //     'salary_structure_id' => 1,
        //     'deduction' => null,
        //     'total_payable' => 2700.00,
        //     'reason' => null,
        //     'year' => '2024',
        //     'month' => 'March',
        //     'date' => '2024-03-31',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
