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
                'name' => 'Willfredo Martínez',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '51998084210',
                'email' => 'cristoestavivo@gmail.com',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],
            [
                'name' => 'Margot',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '51922248511',
                'email' => 'no-email@gmail.com',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],
            [
                'name' => 'Dennis Caparachín',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '51951719105',
                'email' => 'denisc20@gmail.com',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],
            [
                'name' => 'Carol Bejarano',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '51951719105',
                'email' => 'denisc20@gmail.com',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],
            [
                'name' => 'Daniel Armas',
                'document_type' => 'RUC',
                'document_number' => '20605365249',
                'phone' => '51960457474',
                'email' => 'darmas@padresperuanos.pe',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],
            [
                'name' => 'Samuel Carrillo',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '51989511694',
                'email' => 'darmas@padresperuanos.pe',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],
            [
                'name' => 'Jesus Zapana',
                'document_type' => 'DNI',
                'document_number' => '12345678',
                'phone' => '51915087277',
                'email' => 'jzapana@gmail.com',
                'address' => 'Sin dirección',
                'status' => 'Activo',
            ],


        ]);
    }
}
