<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function mediaGroup(): BelongsTo
    {
        return $this->belongsTo(MediaGroup::class);
    }

    public function link(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => $this->isLocal()?$this->file_link:$this->media_url,
        );
    }

    public function fileLink(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => asset("storage/".$this->file_path),
        );
    }

    public function isLocal():bool
    {
        return $this->media_source === "local";
    }
}
