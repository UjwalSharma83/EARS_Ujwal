<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeaveType::create([
            'leave_type_id' => 'annual', // Type identifier (e.g., annual leave)
            'leave_days' => 15, // Number of days allowed for this leave type
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
