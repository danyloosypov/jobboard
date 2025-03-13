<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FilterField;

class FilterFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filterFields = [
            // Assuming id_filters corresponds to the Filter created by FilterSeeder
            ['title' => 'Full-time', 'slug' => 'full-time', 'id_filters' => 1], // Job Type
            ['title' => 'Part-time', 'slug' => 'part-time', 'id_filters' => 1], // Job Type
            ['title' => 'Junior', 'slug' => 'junior', 'id_filters' => 2], // Experience Level
            ['title' => 'Mid-level', 'slug' => 'mid-level', 'id_filters' => 2], // Experience Level
            ['title' => 'Remote', 'slug' => 'remote', 'id_filters' => 3], // Location
            ['title' => 'On-site', 'slug' => 'on-site', 'id_filters' => 3], // Location
            ['title' => '$20k-$40k', 'slug' => '20k-40k', 'id_filters' => 4], // Salary Range
            ['title' => '$40k-$60k', 'slug' => '40k-60k', 'id_filters' => 4], // Salary Range
        ];

        foreach ($filterFields as $filterField) {
            $newFilterField = new FilterField();
            $newFilterField->title = $filterField['title'];
            $newFilterField->slug = $filterField['slug'];
            $newFilterField->id_filters = $filterField['id_filters'];
            $newFilterField->save();
        }
    }
}
