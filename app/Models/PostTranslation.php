<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    protected $fillable = ['post_id', 'locale', 'title', 'body'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
