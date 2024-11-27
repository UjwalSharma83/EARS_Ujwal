<?php

namespace Database\Seeders;

use App\Models\Notify;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotifiestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notify::create([
            'notice_title' => 'Meeting Reminder',
            'description' => 'Quarterly meeting scheduled for the entire team.',
            'select_date' => '2024-01-15', // Date of the notice
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
