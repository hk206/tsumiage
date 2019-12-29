<?php

use Illuminate\Database\Seeder;
use App\Models\DailyReportLike;

class DailyReportLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DailyReportLike::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            DailyReportLike::create([
                'user_id' => $cnt,
                'daily_report_id' => $cnt,
            ]);
        }
    }
}
