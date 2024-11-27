<?php

namespace Database\Seeders;

use App\Models\Leave;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeavestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leave::create([
            'employee_name' => 'John Doe',
            'department_name' => 'Engineering',
            'designation_name' => 'Manager',
            'employee_id' => '12345', // Unique employee identifier
            'leave_type_id' => 1, // Assuming 1 corresponds to a specific leave type
            'from_date' => '2024-01-01',
            'to_date' => '2024-01-15',
            'total_days' => 15,
            'description' => 'Annual Leave',
            'status' => 'Approved',
            'created_at' => now(), // Sets the creation timestamp to the current time
            'updated_at' => now()  // Sets the updated timestamp to the current time
        ]);

        Leave::create([
            'employee_name' => 'Jane Smith',
            'department_name' => 'Sorting',
            'designation_name' => 'Operator',
            'employee_id' => '12346',
            'leave_type_id' => 1,
            'from_date' => '2024-02-01',
            'to_date' => '2024-02-10',
            'total_days' => 10,
            'description' => 'Sick Leave',
            'status' => 'Pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Leave::create([
            'employee_name' => 'Michael Johnson',
            'department_name' => 'Loading',
            'designation_name' => 'Supervisor',
            'employee_id' => '12347',
            'leave_type_id' => 1,
            'from_date' => '2024-03-01',
            'to_date' => '2024-03-07',
            'total_days' => 7,
            'description' => 'Personal Leave',
            'status' => 'Approved',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
