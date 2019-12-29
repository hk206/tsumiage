<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        for( $cnt = 1; $cnt <= 30; $cnt++ ) {
            $faker = Faker\Factory::create('ja_JP');
            User::create([
                'name' => $faker->lastName. ' ' . $faker->firstName,
                'email' => $faker->email,
                'password' => Hash::make('test1234'),
                'introduce' => $faker->text,
            ]);
        }
    }
}
