<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MediaGroup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mediaType(): BelongsTo
    {
        return $this->belongsTo(MediaType::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }


    protected function posterUrl(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => asset("storage/".$attributes['poster']),
        );
    }
}
