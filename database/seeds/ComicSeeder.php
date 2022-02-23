<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 120; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->words(5, true);
            $newComic->original_title = $faker->words(5, true);
            $newComic->volume_n = $faker->numberBetween(1, 115);
            $newComic->photo = $faker->imageUrl(640, 480, 'comics', true);
            $newComic->editor = $faker->company();
            $newComic->author = $faker->name();
            $newComic->price = $faker->randomFloat(1, 3, 45);

            $newComic->save();
        }
    }
}
