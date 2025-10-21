<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberRequest extends Model
{
    protected $fillable = [
        'organization',
        'membership_info',
        'lastname',
        'firstname',
        'email',
        'phone',
        'status',
    ];
}
