<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosHomeController extends Controller
{
    public function home()
    {
        return view('pos.home');
    }
}
