<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Designation::create([
            'designation_id' => 1,
            'designation_name' => 'Jr employee',
            'salary_structure_id' => 1,
            'department_id' => 1,
        ]);

        Designation::create([
            'designation_id' => 2,
            'designation_name' => 'Sr employee',
            'salary_structure_id' => 2,
            'department_id' => 2,
        ]);

        Designation::create([
            'designation_id' => 3,
            'designation_name' => 'Manager',
            'salary_structure_id' => 3,
            'department_id' => 3,
        ]);
    }
}
