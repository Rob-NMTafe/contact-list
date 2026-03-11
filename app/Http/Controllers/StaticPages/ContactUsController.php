<?php

namespace App\Http\Controllers\StaticPages;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        // Get all topics
        $topics = Topic::all();

        // Return the contact-us view with the topics
        return view('static_pages.contact-us')
            ->with('topics', $topics);
    }

    public function thankYou()
    {
        return view('static_pages.thank-you');
    }

    public function store(Request $request)
    {
        // To-Do: Validate data
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required'],
            'topic_id' => ['required', 'integer'],
        ]);

        // Store contact message
        Message::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'topic_id' => $validated['topic'],
            ]);
            return redirect()->route('static.thank-you');
    }
}
