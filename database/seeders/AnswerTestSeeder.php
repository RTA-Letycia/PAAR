<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answer')-> insert([
            ['answer_txt' => '000000000001', 'question_id' => 1],
            ['answer_txt' => '111111111111', 'question_id' => 2],
            ['answer_txt' => 'Buraco', 'question_id' => 3],
            ['answer_txt' => 'Rodovia', 'question_id' => 4],
            ['answer_txt' => 'Empresa XPTO', 'question_id' => 5],
            ['answer_txt' => '1234561230001-82', 'question_id' => 6],
            ['answer_txt' => 'Licitatório', 'question_id' => 7],
        ]);
    }
}
