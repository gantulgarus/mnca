<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $departments = Department::with('humanResources')->get();

        return view('about', compact('departments'));
    }
}