<?php

namespace App\Http\Controllers;

use App\Models\NavigationCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Share navigation data to all views
     *
     * @return void
     */
    public function shareNavigationData()
    {
        $navigationCategories = NavigationCategory::with(['items' => function ($query) {
                $query->active()->ordered();
            }])
            ->active()
            ->ordered()
            ->get();

        return $navigationCategories;
    }
}
