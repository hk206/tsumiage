<?php

use Illuminate\Database\Seeder;
use App\Models\DailyReport;


class DailyReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DailyReport::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            DailyReport::create([
                'project_id' => rand(1, 30),
                'content' => $faker->text,
                'time' => $faker->randomFloat(1, 0, 2),
            ]);
        }
    }
}
