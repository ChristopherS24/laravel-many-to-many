<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i = 0; $i < 25; $i++) {
            $title = fake()->sentence();

            Project::create([
                'title' => $title,
                'creation_date' => fake()->date(),
                'author' => fake()->name()


            ]);

        }
    }
}
