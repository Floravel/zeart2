<?php


namespace Database\Factories;

use App\Models\Artwork;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artwork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $article = ['', 'the '];
        return [
            'title' =>   $article[rand(0,1)]. $this->faker->word(),
            'description' => $this->faker->sentence(),
            'user_id' => \App\Models\User::all()->random()->id,
        ];
    }
    protected function dates() {

    }
}
