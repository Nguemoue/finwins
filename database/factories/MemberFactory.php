<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\MemberCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'surname' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber(),
            'position' => $this->faker->word(),
            'avatar' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'member_category_id' => MemberCategory::factory(),
        ];
    }
}
