<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'Luis Mayta',
                'contact_name' => 'Luis Mayta',
                'phone' => '992949424',
                'email' => 'luis.mayta@gmail.com',
                'website' => 'https://luisitomayta.com/',
                'period' => 'year',
                'currency' => 'S',
                'cost_price' => '0.00',
                'notes' => 'Sin precio de costo',
            ],
            [
                'name' => 'smtp2go',
                'contact_name' => 'smtp2go',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '15.00',
                'notes' => '10,000 emails/month',
            ],
            [
                'name' => 'smtp2go',
                'contact_name' => 'smtp2go',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '30.00',
                'notes' => '50,000 emails/month',
            ],
            [
                'name' => 'smtp2go',
                'contact_name' => 'smtp2go',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '75.00',
                'notes' => '100,000 emails/month',
            ],
            [
                'name' => 'smtp2go',
                'contact_name' => 'smtp2go',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '170.00',
                'notes' => '250,000 emails/month',
            ],
            [
                'name' => 'smtp2go',
                'contact_name' => 'smtp2go',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '280.00',
                'notes' => '500,000 emails/month',
            ],
            [
                'name' => 'smtp2go',
                'contact_name' => 'smtp2go',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '520.00',
                'notes' => '1 000,000 emails/month',
            ],
            [
                'name' => 'Jaguar PC',
                'contact_name' => 'Jaguar PC',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.jaguarpc.com/',
                'period' => 'Year',
                'currency' => '$',
                'cost_price' => '93.57',
                'notes' => 'Hosting',
            ],
            [
                'name' => 'AWS',
                'contact_name' => 'AWS',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://aws.amazon.com/es/',
                'period' => 'Year',
                'currency' => '$',
                'cost_price' => '14.00',
                'notes' => 'Dominio',
            ],
            [
                'name' => 'Godaddy',
                'contact_name' => 'Godaddy',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://dcc.godaddy.com/',
                'period' => 'Year',
                'currency' => '$',
                'cost_price' => '74.99',
                'notes' => 'Dominio',
            ],
            [
                'name' => 'Punto pe',
                'contact_name' => 'Punto pe',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://punto.pe/',
                'period' => 'Year',
                'currency' => 'S',
                'cost_price' => '110.00',
                'notes' => 'Dominio',
            ],
            [
                'name' => 'waapi',
                'contact_name' => 'waapi',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://waapi.app/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '6.5',
                'notes' => '1 Instancias de WhatsApp',
            ],
            [
                'name' => 'waapi',
                'contact_name' => 'waapi',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://waapi.app/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '30',
                'notes' => '5 Instancias de WhatsApp',
            ],
            [
                'name' => 'waapi',
                'contact_name' => 'waapi',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://waapi.app/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '110',
                'notes' => '20 Instancias de WhatsApp',
            ],
            [
                'name' => 'waapi',
                'contact_name' => 'waapi',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://waapi.app/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '150',
                'notes' => '30 Instancias de WhatsApp',
            ],
            [
                'name' => 'SSL',
                'contact_name' => 'SSL',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.ssls.com/',
                'period' => 'year',
                'currency' => '$',
                'cost_price' => '10',
                'notes' => 'Simple SSL',
            ],
            [
                'name' => 'SSL',
                'contact_name' => 'SSL',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.ssls.com/',
                'period' => 'year',
                'currency' => '$',
                'cost_price' => '32',
                'notes' => 'Premium SSL with name company',
            ],
            [
                'name' => 'Hetzner CX22',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '3.29',
                'notes' => 'VCPUS 2 Intel | RAM 4GB | SSD 40GB | TRAFFIC 20TB | PRICE 3.29',
            ],
            [
                'name' => 'Hetzner CPX11',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '3.85',
                'notes' => 'VCPUS 2 AMD | RAM 2GB | SSD 40GB | TRAFFIC 20TB | PRICE 3.85',
            ],
            [
                'name' => 'Hetzner CX32',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '6.30',
                'notes' => 'VCPUS 4 Intel | RAM 8GB | SSD 80GB | TRAFFIC 20TB | PRICE 6.30',
            ],
            [
                'name' => 'Hetzner CPX21',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '7.05',
                'notes' => 'VCPUS 3 AMD | RAM 4GB | SSD 80GB | TRAFFIC 20TB | PRICE 7.05',
            ],
            [
                'name' => 'Hetzner CPX31',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '13.10',
                'notes' => 'VCPUS 4 AMD | RAM 8GB | SSD 80GB | TRAFFIC 20TB | PRICE 13.10',
            ],
            [
                'name' => 'Hetzner CX42',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '15.90',
                'notes' => 'VCPUS 8 Intel | RAM 16GB | SSD 80GB | TRAFFIC 20TB | PRICE 15.90',
            ],
            [
                'name' => 'Hetzner CPX41',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '24.70',
                'notes' => 'VCPUS 8 AMD | RAM 16GB | SSD 80GB | TRAFFIC 20TB | PRICE 24.70',
            ],
            [
                'name' => 'Hetzner CX52',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '31.90',
                'notes' => 'VCPUS 16 Intel | RAM 32GB | SSD 80GB | TRAFFIC 20TB | PRICE 31.90',
            ],
            [
                'name' => 'Hetzner CPX51',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '54.40',
                'notes' => 'VCPUS 16 AMD | RAM 32GB | SSD 80GB | TRAFFIC 20TB | PRICE 54.40',
            ],
            [
                'name' => 'Hetzner CPX11-us',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '4.49',
                'notes' => 'VCPUS 2 AMD | RAM 2GB | SSD 40GB | TRAFFIC 1TB | PRICE 4.49',
            ],
            [
                'name' => 'Hetzner CPX21-us',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '8.99',
                'notes' => 'VCPUS 3 AMD | RAM 4GB | SSD 80GB | TRAFFIC 2TB | PRICE 8.99',
            ],
            [
                'name' => 'Hetzner CPX31-us',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '15.99',
                'notes' => 'VCPUS 4 AMD | RAM 8GB | SSD 80GB | TRAFFIC 3TB | PRICE 15.99',
            ],
            [
                'name' => 'Hetzner CPX41-us',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '29.99',
                'notes' => 'VCPUS 8 AMD | RAM 16GB | SSD 80GB | TRAFFIC 4TB | PRICE 29.99',
            ],
            [
                'name' => 'Hetzner CPX51-us',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.hetzner.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '59.99',
                'notes' => 'VCPUS 16 AMD | RAM 32GB | SSD 80GB | TRAFFIC 5TB | PRICE 59.99',
            ],





        ]);
    }
}
