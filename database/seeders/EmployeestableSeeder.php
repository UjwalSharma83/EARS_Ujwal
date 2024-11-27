<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => 'John Doe',
            'employee_id' => 1,
            'department_id' => 1, // Reference to a department
            'designation_id' => 1, // Reference to a designation
            'salary_structure_id' => 1, // Reference to a salary structure
            'date_of_birth' => '1990-01-15',
            'hire_date' => '2020-06-01',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'location' => 'Toronto',
            'employee_image' => 'images/employees/john_doe.jpg', // Path to an image
            'joining_mode' => 'Direct',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
