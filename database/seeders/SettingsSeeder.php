<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'key' => 'igv',
                'value' => '0.18'
            ],
            [
                'key' => 'tcd',
                'value' => '3.8'
            ],
            [
                'key' => 'tce',
                'value' => '4.2'
            ],
        ]);
    }
}
