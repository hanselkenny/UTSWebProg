<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++) {

            DB::table('movies')->insert([
                [ 'genre_id' => $faker->numberBetween(1,2), 'title' => $faker->jobTitle, 'photo' => '','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
            ]);
        }
    }
}
