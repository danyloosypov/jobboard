<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Filter;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filters = [
            ['title' => 'Job Type', 'slug' => 'job-type'],
            ['title' => 'Experience Level', 'slug' => 'experience-level'],
            ['title' => 'Location', 'slug' => 'location'],
            ['title' => 'Salary Range', 'slug' => 'salary-range'],
        ];

        foreach ($filters as $filter) {
            $newFilter = new Filter();
            $newFilter->title = $filter['title'];
            $newFilter->slug = $filter['slug'];
            $newFilter->save();
        }
    }
}
