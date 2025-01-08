<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'João das Couves', 'email' => 'joao@gmail.com', 'password' => 'minha-senha'],
            ['name' => 'Laura Laurindo', 'email' => 'lauragyn@yahoo.com', 'password' => 'minh@senha'],
            ['name' => 'Anna Dosene', 'email' => 'anadosene@hotmail.com', 'password' => 'Umasenha'],
        ]);
    }
}
