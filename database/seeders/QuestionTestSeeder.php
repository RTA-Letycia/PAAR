<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question')-> insert([
            ['question_txt' => 'N° doc Ofício - Solicitação de Esclarecimentos', 'question_status_id' => 1],
            ['question_txt' => 'Nº doc Nota Técnica recomendando a abertura do PAAR', 'question_status_id' => 1],
            ['question_txt' => 'Assunto/Motivação', 'question_status_id' => 1],
            ['question_txt' => 'Local','question_status_id' => 1],
            ['question_txt' => 'Empresa Responsável', 'question_status_id' => 1],
            ['question_txt' => 'CNPJ', 'question_status_id' => 1],
            ['question_txt' => 'Contrato', 'question_status_id' => 1],
        ]);
    }
}
