<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name', 'description'];

  public function gallerys() {
    return $this->hasMany('App\Gallery');
  }
}
