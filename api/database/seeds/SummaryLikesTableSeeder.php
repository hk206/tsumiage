<?php

use Illuminate\Database\Seeder;
use App\Models\SummaryLike;


class SummaryLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SummaryLike::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            SummaryLike::create([
                'user_id' => $cnt,
                'summary_id' => $cnt,
            ]);
        }
    }
}
