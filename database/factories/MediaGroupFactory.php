<?php

namespace Database\Factories;

use App\Models\MediaGroup;
use App\Models\MediaType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MediaGroupFactory extends Factory
{
    protected $model = MediaGroup::class;

    public function definition(): array
    {
        return [
            'label' => $this->faker->word(),
            'published_at' => $this->faker->word(),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'media_type_id' => MediaType::factory(),
        ];
    }
}
