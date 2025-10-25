<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Membership;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Models\BuildingMaterialPrice;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $notification = Notification::where('is_active', true)->latest()->first();
        $memberships = Membership::all();
        $collaborations = Collaboration::all();

        return view('home', compact('memberships', 'collaborations', 'notification'));
    }
}
