<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    protected $fillable = ['title', 'content',];

    use InteractsWithMedia;

        public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
    }
}
