<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MediaType extends Model
{
    protected $guarded  = [];

    public function mediaGroups(): HasMany
    {
        return $this->hasMany(MediaGroup::class, 'media_type_id');
    }
    public function media(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Media::class, MediaGroup::class);
    }
}
