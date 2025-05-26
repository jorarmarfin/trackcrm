<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Willfredo Martínez Sánchez',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '998084210',
                'email' => 'cristoestavivo@gmail.com',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],

        ]);
    }
}
