<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['is_read'] = false;

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Simpan ke database
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            // Redirect kembali ke halaman kontak dengan pesan sukses
            return redirect()->route('contact')
                ->with('success', 'Pesan Anda berhasil terkirim. Kami akan menghubungi Anda segera.');
        } catch (\Exception $e) {
            // Log error jika diperlukan
            // \Log::error('Contact form error: ' . $e->getMessage());

            // Redirect dengan pesan error
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan. Silakan coba beberapa saat lagi.')
                ->withInput();
        }
    }
}
