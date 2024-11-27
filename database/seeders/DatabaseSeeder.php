<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AttendancestableSeeder::class);
        $this->call(ClientstableSeeder::class);
        $this->call(ContactstableSeeder::class);
        $this->call(DepartmentstableSeeder::class);
        $this->call(DesignationstableSeeder::class);
        $this->call(EmployeestableSeeder::class);
        $this->call(LeavestableSeeder::class);
        $this->call(LeaveTypesTableSeeder::class);
        $this->call(NotifiestableSeeder::class);
        $this->call(SalaryStructurestableSeeder::class);
        $this->call(PayrollstableSeeder::class);
        $this->call(ProvidentFundstableSeeder::class);
        $this->call(ServicestableSeeder::class);
        $this->call(TaskstableSeeder::class);
        $this->call(UserstableSeeder::class);
    }
}
