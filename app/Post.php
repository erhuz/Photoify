<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'content',
    ];

    public function likes()
    {
        return $this->hasMany('App\Models\Likes');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
