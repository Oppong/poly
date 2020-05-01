<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    protected $fillable = ['title', 'description', 'event_time', 'event_date'];

    use InteractsWithMedia;

        public function registerMediaCollections(): void
    {
        $this->addMediaCollection('events');
    }


}
