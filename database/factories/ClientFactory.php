<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'document_type' =>$this->faker->,
//            'document_id'=>1,
            'name' => $this->faker->name(191),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->phoneNumber,
            'total_purchases'=>$this->faker->numerify(),
            'total_paid'=>$this->faker->numerify(),
            'balance'=>$this->faker->numerify(),



        ];
    }
}
