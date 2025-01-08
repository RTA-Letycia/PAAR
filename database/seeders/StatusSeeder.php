<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
                ['type_status' => 'Pré-paar'],
                ['type_status' => '1 Instância'],
                ['type_status' => '2 Instância'],
        ]);
    }
}
