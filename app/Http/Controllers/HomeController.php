<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
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
     * Show the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * Show the testimonials page.
     *
     * @return \Illuminate\View\View
     */
    public function testimonials()
    {
        return view('testimonials');
    }

    /**
     * Show the articles page.
     *
     * @return \Illuminate\View\View
     */
    public function articles()
    {
        // Simulasi data artikel
        // Dalam aplikasi nyata, Anda akan mengambil data dari database
        $articles = [
            // Contoh data artikel
        ];

        return view('articles');
    }

    /**
     * Search articles.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function articlesSearch(Request $request)
    {
        $search = $request->input('search');

        // Simulasi pencarian artikel
        // Dalam aplikasi nyata, Anda akan mencari dalam database

        return view('articles', [
            'search' => $search
        ]);
    }

    /**
     * Show article detail page.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function articleDetail($slug)
    {
        // Simulasi mendapatkan detail artikel berdasarkan slug
        // Dalam aplikasi nyata, Anda akan mengambil dari database

        return view('article-detail', [
            'slug' => $slug
        ]);
    }
}
