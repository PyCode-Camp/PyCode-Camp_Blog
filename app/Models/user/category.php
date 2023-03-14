<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
     'name', 
     'slug',  
    ];

    public function posts()
    {

        return $this->belongsToMany('App\Models\user\Post','category_posts');
    }
}
