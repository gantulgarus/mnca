<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->paginate(10);
        return view('admin.notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($request->is_active) {
            Notification::query()->update(['is_active' => false]); // зөвхөн нэгийг идэвхтэй болгоно
        }

        Notification::create([
            'title' => $request->title,
            'message' => $request->message,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('notifications.index')->with('success', 'Мэдэгдэл амжилттай нэмэгдлээ.');
    }

    public function edit(Notification $notification)
    {
        return view('admin.notifications.edit', compact('notification'));
    }

    public function update(Request $request, Notification $notification)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($request->is_active) {
            Notification::query()->update(['is_active' => false]);
        }

        $notification->update([
            'title' => $request->title,
            'message' => $request->message,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('notifications.index')->with('success', 'Мэдэгдэл шинэчлэгдлээ.');
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();
        return redirect()->route('notifications.index')->with('success', 'Мэдэгдэл устгагдлаа.');
    }
}
