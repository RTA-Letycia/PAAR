<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('process')->insert([
            ['num' => '12345678910', 'user_id' => 1, 'process_status_id' => 1],
            ['num' => '12345678911', 'user_id' => 2, 'process_status_id' => 1],
            ['num' => '12345678912', 'user_id' => 1, 'process_status_id' => 1],
            ['num' => '12345678913', 'user_id' => 1, 'process_status_id' => 1],
            ['num' => '12345678914', 'user_id' => 1, 'process_status_id' => 1],
            ['num' => '12345678915', 'user_id' => 1, 'process_status_id' => 1],
            ['num' => '12345678916', 'user_id' => 3, 'process_status_id' => 1],
            ['num' => '12345678917', 'user_id' => 3, 'process_status_id' => 1],
            ['num' => '12345678918', 'user_id' => 1, 'process_status_id' => 1],
            ['num' => '12345678919', 'user_id' => 2, 'process_status_id' => 1],
        ]);
    }
}
