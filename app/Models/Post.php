<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'text', 'data_time', 'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
