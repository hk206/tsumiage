<?php

use Illuminate\Database\Seeder;
use App\Models\SummaryComment;

class SummaryCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SummaryComment::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            SummaryComment::create([
                'user_id' => $cnt,
                'summary_id' => $cnt,
                'content' => $faker->text,
            ]);
        }
    }
}
