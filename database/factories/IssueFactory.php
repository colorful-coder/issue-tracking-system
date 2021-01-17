<?php

namespace Database\Factories;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Factories\Factory;

class IssueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word($maxNbChars = 45),
            'summary' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'severity' => $this->faker->text($maxNbChars = 45),
            'priority' => $this->faker->text($maxNbChars = 45),
            'status' => $this->faker->optional(
                $status = "WIP",
                $status = "Finished",
                $default = "Assigned"
            )->word,
        ];
    }
}
