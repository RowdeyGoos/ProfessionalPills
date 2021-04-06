<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Participant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'user_id' => $this->faker->
//            'description' => $this->faker
//            'status' => $this->faker
//            'location' => $this->faker
//            'placebo' => $this->faker
//            'trial_results' => $this->faker
        ];
    }
}
