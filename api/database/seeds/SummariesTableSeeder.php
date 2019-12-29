<?php

use Illuminate\Database\Seeder;
use App\Models\Summary;

class SummariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Summary::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            Summary::create([
                'project_id' => rand(1, 30),
                'content' => $faker->text,
            ]);
        }
    }
}
