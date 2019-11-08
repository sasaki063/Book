<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
       'title',
       'text',
   ];

   public function user()
    {
      return $this->belongsTo('App\User');
    }

   public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
