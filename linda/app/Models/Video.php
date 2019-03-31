<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Video extends Authenticatable
{
    use Notifiable;

    protected $table = 'video';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'catagory_id', 'views', 'title', 'video', 'description', 'thumbnail',
    ];
    
}
