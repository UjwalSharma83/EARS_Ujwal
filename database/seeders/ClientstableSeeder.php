<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'client_name' => 'ABC Corporation',
            'details' => 'Leading supplier of industrial equipment and tools.',
            'client_image' => 'images/clients/abc_corporation.jpg', // Path to the client image
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
