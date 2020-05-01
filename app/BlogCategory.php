<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
  protected $fillable = ['name', 'description'];

  public function blog()
   {
       return $this->belongsToMany('App\Blog');
   }
}
