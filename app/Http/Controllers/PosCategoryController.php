<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosCategoryController extends Controller
{
    public function foodBev()
    {
        return view('pos.category')
            ->with('category', 'food-beverage');
    }

    public function beautyHealth()
    {
        return view('pos.category')
            ->with('category', 'beauty-health');
    }

    public function homeCare()
    {
        return view('pos.category')
            ->with('category', 'home-care');
    }

    public function babyKid()
    {
        return view('pos.category')
            ->with('category', 'baby-kid');
    }
}
