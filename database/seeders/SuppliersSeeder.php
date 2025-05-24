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
                'name' => 'Hetzner cpx11',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '3.85',
                'notes' => '2AMD | RAM 2GB | SSD 40GB | TRAFFIC 20TB',
            ],
            [
                'name' => 'Hetzner cpx21',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '8.99',
                'notes' => '3AMD | RAM 4GB | SSD 80GB | TRAFFIC 2TB',
            ],
            [
                'name' => 'Hetzner cx32',
                'contact_name' => 'Hetzner',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://www.smtp2go.com/',
                'period' => 'month',
                'currency' => '€',
                'cost_price' => '6.30',
                'notes' => '4AMD | RAM 8GB | SSD 80GB | TRAFFIC 2TB',
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
                'name' => 'waapi',
                'contact_name' => 'waapi',
                'phone' => '123456789',
                'email' => 'a@b.com',
                'website' => 'https://waapi.app/',
                'period' => 'month',
                'currency' => '$',
                'cost_price' => '6.5',
                'notes' => 'Instancias de WhatsApp',
            ],



        ]);
    }
}
