<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tag extends Model
{
    use HasFactory;


    public function posts(): BelongsToMany 
    {

        return $this->belongsToMany('App\Models\user\Post', 'post_tags');
    }
}
