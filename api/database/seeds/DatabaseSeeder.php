<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            DailyReportsTableSeeder::class,
            SummariesTableSeeder::class,
            DailyReportLikesTableSeeder::class,
            SummaryLikesTableSeeder::class,
            ProjectsTableSeeder::class,
            DailyReportCommentsTableSeeder::class,
            SummaryCommentsTableSeeder::class,
        ]);
    }
    // あとでロールバックな
}
