<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebDevelopmentController extends Controller
{
    /**
     * Display the web development page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('web-development');
    }
}
