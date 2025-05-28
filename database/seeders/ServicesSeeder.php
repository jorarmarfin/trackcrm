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
                'supplier_id' => 1,
            ],
            [
                'name' => 'Portal institucional ',
                'description' => 'Desarrollada en wordpress',
                'price' => 3000.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Portal con blog, multi-idioma',
                'description' => 'Desarrollada en wordpress, blog',
                'price' => 6000.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Portal con tienda online',
                'description' => 'Desarrollada en wordpress, blog',
                'price' => 8000.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Envío de 10.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 92.50,
                'supplier_id' => 2,
            ],
            [
                'name' => 'Envío de 50.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 148.00,
                'supplier_id' => 3,
            ],
            [
                'name' => 'Envío de 100.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 315.00,
                'supplier_id' => 4,
            ],
            [
                'name' => 'Envío de 250.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 667.00,
                'supplier_id' => 5,
            ],
            [
                'name' => 'Envío de 500.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 1073.00,
                'supplier_id' => 6,
            ],
            [
                'name' => 'Envío de 1 000.000 correos',
                'description' => 'Requiere dominio para envío',
                'price' => 1961.00,
                'supplier_id' => 7,
            ],
            [
                'name' => '1 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 60.00,
                'supplier_id' => 12,
            ],
            [
                'name' => '5 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 180.00,
                'supplier_id' => 13,
            ],
            [
                'name' => '20 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 504.00,
                'supplier_id' => 13,
            ],
            [
                'name' => '30 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 672.00,
                'supplier_id' => 14,
            ],
            [
                'name' => 'Dominio',
                'description' => 'Requiere dominio para envío',
                'price' => 65.00,
                'supplier_id' => 9,
            ],
            [
                'name' => 'Dominio punto pe',
                'description' => 'Requiere dominio para envío',
                'price' => 150.00,
                'supplier_id' => 11,
            ],
            [
                'name' => 'Hosting básico',
                'description' => 'Sin Email corporativo',
                'price' => 80.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Hosting Intermedio',
                'description' => 'Requiere dominio para envío',
                'price' => 150.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Dominio y Hosting apostol',
                'description' => 'Requiere dominio para envío',
                'price' => 100.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Hosting Empresarial',
                'description' => 'Requiere dominio para envío',
                'price' => 350.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Email corporativo',
                'description' => '5GB de almacenamiento',
                'price' => 10.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'SSL Simple',
                'description' => 'Básico',
                'price' => 76.00,
                'supplier_id' => 16,
            ],
            [
                'name' => 'SSL Advance',
                'description' => 'Avanzado',
                'price' => 160.00,
                'supplier_id' => 17,
            ],
            [
                'name' => 'Server VPS CPX11',
                'description' => 'Finland',
                'price' => 58.17,
                'supplier_id' => 19,
            ],
            [
                'name' => 'Server VPS cpx21',
                'description' => 'US',
                'price' => 80.00,
                'supplier_id' => 28,
            ],
            [
                'name' => 'Server VPS cx32',
                'description' => 'Finland',
                'price' => 69.00,
                'supplier_id' => 20,
            ],

        ]);
    }
}
