<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Show the testimonials page with data.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            // Cek apakah tabel testimonials ada dan memiliki data
            if (DB::table('testimonials')->exists()) {
                // Get featured testimonials for the carousel - menggunakan Eloquent Model
                $featuredTestimonials = Testimonial::active()
                    ->featured()
                    ->ordered()
                    ->get();

                // Get testimonials for the grid display - menggunakan Eloquent Model
                $gridTestimonials = Testimonial::active()
                    ->ordered()
                    ->limit(6)
                    ->get();
            } else {
                // Koleksi kosong jika tidak ada data
                $featuredTestimonials = collect();
                $gridTestimonials = collect();
            }
        } catch (\Exception $e) {
            // Jika terjadi error database, gunakan koleksi kosong
            $featuredTestimonials = collect();
            $gridTestimonials = collect();
        }

        return view('testimonials', compact('featuredTestimonials', 'gridTestimonials'));
    }
}
