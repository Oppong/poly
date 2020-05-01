<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
  protected $fillable = ['name', 'description', 'category_id'];

  use InteractsWithMedia;

      public function registerMediaCollections(): void
  {
      $this->addMediaCollection('gallery');
  }

    public function category() {
      return $this->belongsTo('App\Category');
    }
}
