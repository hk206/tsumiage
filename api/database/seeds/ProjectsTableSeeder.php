<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            Project::create([
                'user_id' => 1,
                'category_id' => $cnt,
                'title' => $faker->word,
                'outline' => $faker->text,
                'total_time' => $faker->randomFloat(1, 0, 750),
            ]);
        }
    }
}
