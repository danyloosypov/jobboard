<?php

namespace Database\Seeders;

use App\Models\FilterField;
use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vacancy::factory(100)->create()->each(function ($vacancy) {
            // Attach filter fields to the vacancy
            $filterFields = FilterField::inRandomOrder()->take(rand(1, 5))->pluck('id');
            $vacancy->filterFields()->attach($filterFields);
        });
    }
}
