<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'subtitle',
      'slug',
      'body',
      'image',  
    ];


    public function tags (): BelongsToMany
    {

      return $this->BelongsToMany('App\Models\user\tag','post_tags');

    }


    public function categories(){

      return $this->belongsToMany('App\Models\user\category','category_posts');
    }
}
