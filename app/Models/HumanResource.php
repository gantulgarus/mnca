<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HumanResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'position',
        'photo',
        'company',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}