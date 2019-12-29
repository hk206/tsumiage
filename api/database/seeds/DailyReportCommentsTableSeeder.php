<?php

use Illuminate\Database\Seeder;
use App\Models\DailyReportComment;


class DailyReportCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DailyReportComment::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            DailyReportComment::create([
                'user_id' => $cnt,
                'daily_report_id' => $cnt,
                'content' => $faker->text,
            ]);
        }
    }
}
