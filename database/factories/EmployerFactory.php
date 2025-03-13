<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_users' => User::inRandomOrder()->first()->id, // Associate with a random user
            'name' => $this->faker->company(), // Fake company name
            'description' => $this->faker->paragraph(), // Fake one-paragraph description
            'text' => $this->faker->paragraphs(3, true), // Several paragraphs (3) for text
            'website' => $this->faker->url(), // Fake website link
        ];
    }
}
