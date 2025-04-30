<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display the IT training page
     *
     * @return \Illuminate\View\View
     */
    public function it()
    {
        return view('training.it');
    }

    /**
     * Display the design training page
     *
     * @return \Illuminate\View\View
     */
    public function design()
    {
        return view('training.design');
    }

    /**
     * Display the web development training page
     *
     * @return \Illuminate\View\View
     */
    public function web()
    {
        return view('training.web');
    }

    /**
     * Display the mobile app development training page
     *
     * @return \Illuminate\View\View
     */
    public function mobile()
    {
        return view('training.mobile');
    }
}
