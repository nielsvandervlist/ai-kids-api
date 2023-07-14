<?php

namespace Database\Factories;

use App\Models\Choice;
use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mission_id' => Mission::factory()->create()->id,
            'choice_id' => Choice::factory()->create()->id,
            'value' => $this->faker->name,
        ];
    }
}
