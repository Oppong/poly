<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Member extends Model implements HasMedia
{
    protected $fillable = ['name', 'description', 'music_part'];

    use InteractsWithMedia;

        public function registerMediaCollections(): void
    {
        $this->addMediaCollection('member');
    }
}
