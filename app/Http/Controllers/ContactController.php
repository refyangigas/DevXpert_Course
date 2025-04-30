<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle contact form submission
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Get form data
        $contactData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        // In a real application, you would send email here
        // Mail::to('cs@creativemedia.id')->send(new ContactFormMail($contactData));

        // For demonstration, we'll just save to database
        // You would need to create a Contact model and migration for this
        // Contact::create($contactData);

        // For now, just redirect with success message
        return redirect()->back()->with('success', 'Terima kasih telah menghubungi kami. Kami akan segera meresponnya!');
    }
}
