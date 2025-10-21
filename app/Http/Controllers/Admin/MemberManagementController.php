<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberRequest;

class MemberManagementController extends Controller
{
    public function index()
    {
        $requests = MemberRequest::latest()->paginate(10);
        return view('admin.member-requests.index', compact('requests'));
    }

    public function show($id)
    {
        $request = MemberRequest::findOrFail($id);
        return view('admin.member-requests.show', compact('request'));
    }

    public function update(Request $request, $id)
    {
        $memberRequest = MemberRequest::findOrFail($id);
        $memberRequest->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Төлөв амжилттай шинэчлэгдлээ.');
    }

    public function destroy($id)
    {
        MemberRequest::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Хүсэлт устгагдлаа.');
    }
}
