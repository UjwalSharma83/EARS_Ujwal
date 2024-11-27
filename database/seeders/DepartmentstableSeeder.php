<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'department_id' => 1,
            'department_name' => 'Unloading',
        ]);

        Department::create([
            'department_id' => 2,
            'department_name' => 'Sorting',
        ]);

        Department::create([
            'department_id' => 3,
            'department_name' => 'loading',
        ]);
    }
}
