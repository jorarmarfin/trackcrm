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
                'name' => 'Portal con blog, multidioma',
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
                'supplier_id' => 15,
            ],
            [
                'name' => '5 Instancia para envío de whatsapp',
                'description' => 'Requiere dominio para envío',
                'price' => 180.00,
                'supplier_id' => 16,
            ],
            [
                'name' => 'Dominio',
                'description' => 'Requiere dominio para envío',
                'price' => 65.00,
                'supplier_id' => 13,
            ],
            [
                'name' => 'Dominio punto pe',
                'description' => 'Requiere dominio para envío',
                'price' => 150.00,
                'supplier_id' => 21,
            ],
            [
                'name' => 'Hosting básico',
                'description' => 'Requiere dominio para envío',
                'price' => 150.00,
                'supplier_id' => 1,
            ],
            [
                'name' => 'Dominio y Hosting',
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
                'description' => 'Basico',
                'price' => 76.00,
                'supplier_id' => 19,
            ],
            [
                'name' => 'SSL Advance',
                'description' => 'Basico',
                'price' => 160.00,
                'supplier_id' => 20,
            ],
            [
                'name' => 'VPS Hosting CX22',
                'description' => '2 vCPU | RAM 4 GB | SSD 40 GB | TRAFFIC 20 TB',
                'price' => 55.82,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX11',
                'description' => '2 vCPU | RAM 2 GB | SSD 40 GB | TRAFFIC 20 TB',
                'price' => 58.17,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CX32',
                'description' => '4 vCPU | RAM 8 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 68.46,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX21',
                'description' => '3 vCPU | RAM 4 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 71.61,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX31',
                'description' => '4 vCPU | RAM 8 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 97.02,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CX42',
                'description' => '8 vCPU | RAM 16 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 108.78,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX41',
                'description' => '8 vCPU | RAM 16 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 144.54,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CX52',
                'description' => '16 vCPU | RAM 32 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 176.58,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX51',
                'description' => '16 vCPU | RAM 32 GB | SSD 80 GB | TRAFFIC 20 TB',
                'price' => 271.08,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX11',
                'description' => '2 vCPU | RAM 2 GB | SSD 40 GB | TRAFFIC 1 TB',
                'price' => 60.86,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX21',
                'description' => '3 vCPU | RAM 4 GB | SSD 80 GB | TRAFFIC 2 TB',
                'price' => 79.76,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX31',
                'description' => '4 vCPU | RAM 8 GB | SSD 80 GB | TRAFFIC 3 TB',
                'price' => 109.16,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX41',
                'description' => '8 vCPU | RAM 16 GB | SSD 80 GB | TRAFFIC 4 TB',
                'price' => 167.96,
                'supplier_id' => 11,
            ],
            [
                'name' => 'VPS Hosting CPX51',
                'description' => '16 vCPU | RAM 32 GB | SSD 80 GB | TRAFFIC 5 TB',
                'price' => 293.96,
                'supplier_id' => 11,
            ],



        ]);
    }
}
