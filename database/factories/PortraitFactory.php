<?php

namespace Database\Factories;

use App\Models\Portrait;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PortraitFactory extends Factory
{
    protected $model = Portrait::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'occupation' => $this->faker->word(),
            'bio' => $this->faker->word(),
            'poster' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
