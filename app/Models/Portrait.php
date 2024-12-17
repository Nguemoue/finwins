<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portrait extends Model
{
    protected $guarded = [];
    use HasFactory;

    protected function posterUrl(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => asset("storage/".$this->poster),
        );
    }
}
