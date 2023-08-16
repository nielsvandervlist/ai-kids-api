<?php

namespace Database\Factories;

use App\Models\Mission;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserMission>
 */
class UserMissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'mission_id' => Mission::factory()->create()->id,
            'question_id' => Question::factory()->create()->id,
            'stars' => rand(1, 3),
            'points' => rand(1, 3)
        ];
    }
}
