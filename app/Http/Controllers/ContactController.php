<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Store a newly submitted public contact message.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        DB::table('contact_messages')->insert([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Remove an inquiry from the admin dashboard queue.
     */
    public function destroy($id)
    {
        DB::table('contact_messages')->where('id', $id)->delete();

        return back()->with('success', 'Inquiry removed successfully.');
    }
}