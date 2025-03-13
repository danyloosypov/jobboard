<?php

namespace Database\Factories;

use App\Models\Vacancy;
use App\Models\Employer;
use App\Models\VacancyCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_employers' => Employer::inRandomOrder()->first()->id,  // Associate with a random employer
            'id_vacancy_categories' => VacancyCategory::inRandomOrder()->first()->id,  // Associate with a random category
            'title' => $this->faker->jobTitle(),  // Fake job title
            'city' => $this->faker->city(),  // Fake city name
            'description' => $this->faker->paragraphs(3, true),  // Fake description (3 paragraphs)
            'is_active' => 1,  // 80% chance that the job is active
        ];
    }
}
