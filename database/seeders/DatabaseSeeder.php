<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StatusSeeder::class,
            QuestionTestSeeder::class,
            AnswerTestSeeder::class,
            UserTestSeeder::class,
            ProcessTestSeeder::class,
        ]);
    }
}
