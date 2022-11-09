<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index($slug)
    {
        $room = Room::where('slug', $slug)->first();
        $messages = Message::where('room_id', $room->id)->orderBy('created_at', 'desc')->get();
        return view('room', compact('room', 'messages'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|min:4|max:16|string']);
        $slug = Str::random(8);
        Room::create([
            'slug' => $slug,
            'name' => $request->name
        ]);

        return redirect(route('room.index', $slug));
    }

    public function sendMessage($slug, Request $request)
    {
        $room = Room::where('slug', $slug)->first();
        Message::create([
            'room_id' => $room->id,
            'body' => $request->message
        ]);

        return redirect(route('room.index', $slug));
    }
}
