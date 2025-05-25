<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Landing page simple',
                'description' => 'Desarrollada en wordpress',
                'price' => 1500,
            ],
            [
                'name' => 'Portal institucional ',
                'description' => 'Desarrollada en wordpress',
                'price' => 3000.00,
            ],
            [
                'name' => 'Portal con blog, multidioma',
                'description' => 'Desarrollada en wordpress, blog',
                'price' => 6000.00,
            ],
            [
                'name' => 'Portal con tienda online',
                'description' => 'Desarrollada en wordpress, blog',
                'price' => 8000.00,
            ],
            [
                'name' => 'Envío de 10.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 92.50,
            ],
            [
                'name' => 'Envío de 50.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 148.00,
            ],
            [
                'name' => 'Envío de 100.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 315.00,
            ],
            [
                'name' => 'Envío de 250.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 667.00,
            ],
            [
                'name' => 'Envío de 500.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 1073.00,
            ],
            [
                'name' => 'Envío de 1 000.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 1961.00,
            ],
            [
                'name' => '1 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 60.00,
            ],
            [
                'name' => '5 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 180.00,
            ],
            [
                'name' => 'Dominio',
                'description' => 'Requiere dominio para envío',
                'price' => 65.00,
            ],
            [
                'name' => 'Hosting básico',
                'description' => 'Requiere dominio para envío',
                'price' => 150.00,
            ],
            [
                'name' => 'Dominio y Hosting',
                'description' => 'Requiere dominio para envío',
                'price' => 150.00,
            ],
            [
                'name' => 'VPS Hosting',
                'description' => 'Requiere dominio para envío',
                'price' => 180.00,
            ],
            [
                'name' => 'Email',
                'description' => '5GB de almacenamiento',
                'price' => 10.00,
            ],

        ]);
    }
}
