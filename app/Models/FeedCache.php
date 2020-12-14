<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedCache extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_cursor', 'user_last_index', 'media_cursor', 'media_last_index', 'day_coins'
    ];

    protected $hidden = [
        'day_coins'
    ];
}
