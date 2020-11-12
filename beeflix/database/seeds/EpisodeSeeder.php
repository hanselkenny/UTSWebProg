<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 12; $i++) {
            for($j = 1; $j <= 15; $j++) {
            DB::table('episodes')->insert([
                [ 'movie_id' => $i, 'episode' => $j, 'title' => $faker->sentence($nbWords = 3, $variableNbWords = true)]
            ]);
        }
    }
}
}
