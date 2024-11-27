<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'employee_id' => 1, // Reference to an existing employee
            'task_name' => 'Prepare Monthly Report',
            'from_date' => '2024-01-01',
            'to_date' => '2024-01-10',
            'total_days' => 10,
            'task_description' => 'Prepare and finalize the financial report for the month of January.',
            'status' => 'completed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
