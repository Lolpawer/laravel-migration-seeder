<?php

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

use App\Card;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $card = new Card();

            $card->name = $faker->name($gender = null);
            $card->attribute = $faker->randomLetter;
            $card->level = $faker->randomDigit;
            $card->effect = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $card->atk = $faker->numberBetween($min = 0, $max = 9000);
            $card->def = $faker->numberBetween($min = 0, $max = 9000);

            $card->save();
        }
    }
}