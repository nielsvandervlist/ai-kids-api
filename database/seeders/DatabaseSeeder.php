<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Game::factory(1)->create();
        \App\Models\Mission::factory(1)->create();
        \App\Models\Question::factory(1)->create();
        \App\Models\Choice::factory(1)->create();
        \App\Models\UserGame::factory(1)->create();
        \App\Models\UserMission::factory(1)->create();
    }
}
