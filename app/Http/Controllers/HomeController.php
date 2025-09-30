<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Membership;
use Illuminate\Http\Request;
use App\Models\BuildingMaterialPrice;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $memberships = Membership::all();

        return view('home', compact('memberships'));
    }
}
