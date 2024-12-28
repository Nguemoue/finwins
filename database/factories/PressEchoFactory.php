<?php

namespace Database\Factories;

use App\Models\PressEcho;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PressEchoFactory extends Factory
{
    protected $model = PressEcho::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->word(),
            'published_at' => $this->faker->word(),
            'pdf_path' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
