<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosSalesController extends Controller
{
    public function sales()
    {
        return view('pos.sales');
    }
}
