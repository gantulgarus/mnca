<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name', // Байгууллагын нэр
        'address',           // Хаяг
        'phone',             // Утас
        'email',             // Мэйл хаяг
        'website',           // Вэб сайт
        'facebook',          // Facebook хаяг
        'twitter',           // Twitter хаяг
        'youtube',           // YouTube хаяг
        'logo',           // Байгууллагын лого
    ];

    // Хэрэв хүсэлтүүдтэй холбоотой бол доорх харилцааг нэмж болно:
    // public function requests()
    // {
    //     return $this->hasMany(MembershipRequest::class);
    // }
}
