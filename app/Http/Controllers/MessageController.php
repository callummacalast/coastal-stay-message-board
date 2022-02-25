<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'messages' => Message::latest()->paginate(5)
        ]);
    }
    public function indexAdmin()
    {
        return view('dashboard', [
            'messages' => Message::latest()->paginate(10)
        ]);
    }

    public function show(Message $message)
    {
        return view('messages.show', [
            'message' => $message
        ]);
    }

    public function create()
    {
        return view('message');
    }

    public function store(Message $message)
    {
        $attr = request()->validate([
            'title' => 'required',
            'message' => 'required|max:255'
        ]);

        Message::create($attr);

        return redirect('/')->with('sucess', 'Your message has been left!');
    }


    public function editAdmin(Message $message)
    {
        return view('messages.edit', ['message' => $message]);
    }


    public function destroy(Message $message)
    {
        $message->delete();

        return back()->with('success', 'Post Deleted');
    }
}
