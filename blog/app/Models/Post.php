<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $fillable = [
    'title','featured','content','category_id'
  ];

  public function getFeaturedAttribute($featured){

    return asset($featured);
  }


  public function category(){
      return $this->belongsTo('App\category');
  }
}
