<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video extends Model implements HasMedia
{
  protected $fillable = ['video_title', 'video_description'];

  use InteractsWithMedia;

      public function registerMediaCollections(): void
  {
      $this->addMediaCollection('video');
      $this->addMediaCollection('poster');
  }

}
