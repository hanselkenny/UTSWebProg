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
        DB::table('movies')->insert([
            [ 'genre_id' => '1', 'title' => $faker->jobTitle, 'photo' => 'https://www.hancinema.net/photos/fullsizephoto1102149.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '1', 'title' => $faker->jobTitle, 'photo' => 'https://upload.wikimedia.org/wikipedia/id/b/b8/Blood-Poster.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '1', 'title' => $faker->jobTitle, 'photo' => 'https://i.pinimg.com/736x/d4/21/0e/d4210e194fc2e20fca05e329538babad.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '1', 'title' => $faker->jobTitle, 'photo' => 'https://i.pinimg.com/236x/a2/72/1c/a2721c98068cedc733e06fd4372ffa98.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '2', 'title' => $faker->jobTitle, 'photo' => 'https://i.pinimg.com/originals/41/12/57/411257f6a849000de204b8f1572f19b7.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '2', 'title' => $faker->jobTitle, 'photo' => 'https://m.media-amazon.com/images/M/MV5BN2I0MDE5ZDctZjVjNS00ODY1LWIwY2UtMDgwNGVhOWE5OWEzXkEyXkFqcGdeQXVyODk1MjAxNzQ@._V1_.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '2', 'title' => $faker->jobTitle, 'photo' => 'https://m.media-amazon.com/images/M/MV5BZTE3M2I5MGYtNTYwMC00NTRmLTk5OWYtNWI0YzM0MmVmNzk0XkEyXkFqcGdeQXVyOTI2MTMwMDc@._V1_.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '2', 'title' => $faker->jobTitle, 'photo' => 'https://i.pinimg.com/originals/85/1d/9e/851d9e6466e5afd6aebeb92293509905.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '3', 'title' => $faker->jobTitle, 'photo' => 'https://m.media-amazon.com/images/M/MV5BZjYyMmJjYWUtZjBjMS00MWQzLTk0OWYtYzU1MmE3NzFhZjJkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '3', 'title' => $faker->jobTitle, 'photo' => 'https://i.pinimg.com/236x/5f/5f/9b/5f5f9b5a701955cd8fe10049fb13b936--new-tv-series-web-series.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '3', 'title' => $faker->jobTitle, 'photo' => 'https://i.pinimg.com/originals/73/ab/8c/73ab8c7cf5bfb62be4aa3afa124fdc49.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
        DB::table('movies')->insert([
            [ 'genre_id' => '3', 'title' => $faker->jobTitle, 'photo' => 'https://m.media-amazon.com/images/M/MV5BMTQzMDk1ODI2M15BMl5BanBnXkFtZTYwNjMyNDk4._V1_UY1200_CR26,0,630,1200_AL_.jpg','description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),'rating'=> $faker->numberBetween(1,5)]
        ]);
    }
}
