<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'date' => now(), // Defaults to the current date
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'subject' => 'General Inquiry',
            'message' => 'I would like more information about your services.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
