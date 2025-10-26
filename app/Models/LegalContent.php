<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalContent extends Model
{
    protected $fillable = [
        'category',
        'title',
        'description',
        'pdf_path',
    ];
}
