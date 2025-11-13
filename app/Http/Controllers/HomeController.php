<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Membership;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Models\BuildingMaterialPrice;
use App\Models\LegalContent;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $notification = Notification::where('is_active', true)->latest()->first();
        $memberships = Membership::all();
        $collaborations = Collaboration::all();

        $laws = LegalContent::where('category', 'legal_framework')->limit(6)->orderBy('created_at', 'desc')->get();
        $guidelines = LegalContent::where('category', 'guidelines_manuals')->limit(6)->orderBy('created_at', 'desc')->get();
        // dd($laws);

        return view('home', compact('memberships', 'collaborations', 'notification', 'laws', 'guidelines'));
    }
}
