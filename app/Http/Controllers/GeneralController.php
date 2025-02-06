<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        return view('Frontend.index');
    }

    public function contact(): View
    {
        return \view('Frontend.contact');
    }
}
