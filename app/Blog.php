<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Blog extends Model implements HasMedia
{
  // protected $fillable = ['blog_title', 'blog_sub_title', 'blog_author', 'blog_date'];
  protected $guarded = [];

  use InteractsWithMedia;

  use HasTrixRichText;

      public function registerMediaCollections(): void
  {
      $this->addMediaCollection('blog');
  }

  public function tags()
   {
       return $this->belongsToMany('App\Tag');
   }
}
