<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'cover_image',
        'pdf_file',
        'published_at',
    ];
}
