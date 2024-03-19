<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('site.home.index');
    }
}
