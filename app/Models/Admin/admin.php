<?php

namespace App\Models\Admin;

//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Summary of admin
 */
class admin extends Authenticatable
{
    use HasFactory;

    /**
     */
   
     use Notifiable;
}
