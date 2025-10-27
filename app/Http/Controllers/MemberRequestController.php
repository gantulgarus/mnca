<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberRequest;

class MemberRequestController extends Controller
{
    public function create()
    {
        return view('member_req.membership-request');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'suggestion' => 'required|string|max:1000',
            'lastname' => 'required|string|max:100',
            'firstname' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);

        MemberRequest::create($validated);

        return redirect()->back()->with('success', 'Таны санал хүсэлт амжилттай илгээгдлээ!');
    }
}
