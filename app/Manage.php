<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Manage extends Model implements HasMedia
{
  protected $fillable = ['name', 'position'];

  use InteractsWithMedia;

      public function registerMediaCollections(): void
  {
      $this->addMediaCollection('manage');
  }
}
