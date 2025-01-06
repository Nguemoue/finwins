<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    protected function formatedInterval(): Attribute
    {
        return Attribute::make(
            get: function($value, array $attributes) {
                //if date of start date is equal to end date
                return $this->start_date->day .' au '. $this->end_date->day . ' '. $this->end_date->monthName;
            },

        );
    }
}
