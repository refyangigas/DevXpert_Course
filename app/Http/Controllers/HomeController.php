<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Portfolio; // Tambahkan model Portfolio
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            // Cek apakah tabel testimonials ada dan memiliki data
            if (DB::table('testimonials')->exists()) {
                // Get featured testimonials for the home page carousel
                $homeTestimonials = Testimonial::where('status', 'active')
                    ->where('is_featured', true)
                    ->orderBy('order', 'asc')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
            } else {
                $homeTestimonials = collect(); // Koleksi kosong jika tidak ada data
            }
        } catch (\Exception $e) {
            // Jika terjadi error database, gunakan koleksi kosong
            $homeTestimonials = collect();
        }

        // Fetch latest articles for home page
        try {
            if (DB::table('articles')->exists()) {
                $latestArticles = Article::with('category')
                    ->published()
                    ->latest('published_at')
                    ->take(3)
                    ->get();
            } else {
                $latestArticles = collect();
            }
        } catch (\Exception $e) {
            $latestArticles = collect();
        }

        // Fetch featured portfolios for home page
        try {
            if (DB::table('portfolios')->exists()) {
                $featuredPortfolios = Portfolio::where('is_featured', true)
                    ->orderBy('order', 'asc')
                    ->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get();
            } else {
                $featuredPortfolios = collect();
            }
        } catch (\Exception $e) {
            $featuredPortfolios = collect();
        }

        return view('home', compact('homeTestimonials', 'latestArticles', 'featuredPortfolios'));
    }

    /**
     * Show the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the vision mission page.
     *
     * @return \Illuminate\View\View
     */
    public function visionMission()
    {
        return view('vision-mission');
    }

    /**
     * Show the portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        try {
            if (DB::table('portfolios')->exists()) {
                $portfolios = Portfolio::orderBy('order', 'asc')
                    ->orderBy('created_at', 'desc')
                    ->get();
            } else {
                $portfolios = collect();
            }
        } catch (\Exception $e) {
            $portfolios = collect();
        }

        return view('portfolio', compact('portfolios'));
    }
}
