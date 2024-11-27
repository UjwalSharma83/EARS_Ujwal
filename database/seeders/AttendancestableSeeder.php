<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendancestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attendance::create([
            'name' => 'John Doe',
            'department_name' => 'Engineering',
            'designation_name' => 'Manager',
            'employee_id' => '1',
            'select_date' => '2024-01-15',
            'month' => 'January',
            'check_in' => '09:05:00',
            'late' => 'Yes',
            'check_out' => '18:00:00',
            'overtime' => '00:30:00', // 30 minutes overtime
            'duration_minutes' => 535, // Total duration in minutes (8 hours 55 minutes)
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
