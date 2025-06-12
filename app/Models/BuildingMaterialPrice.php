<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuildingMaterialPrice extends Model
{
    protected $fillable = [
        'material_name',
        'price',
        'percentage_change',
        'trend',
        'date',
    ];
}