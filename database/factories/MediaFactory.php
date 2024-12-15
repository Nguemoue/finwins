<?php

namespace Database\Factories;

use App\Models\Media;
use App\Models\MediaGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition(): array
    {
        return [
            'file_path' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'media_group_id' => MediaGroup::factory(),
        ];
    }
}
