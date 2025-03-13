<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VacancyCategory;

class VacancyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['title' => 'PHP'],
            ['title' => 'Laravel'],
            ['title' => 'Fullstack'],
            ['title' => 'JavaScript'],
            ['title' => 'DevOps'],
            ['title' => 'Frontend'],
            ['title' => 'Backend'],
            ['title' => 'Database Administration'],
        ];

        foreach ($categories as $category) {
            VacancyCategory::create($category);
        }
    }
}
