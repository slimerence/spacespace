<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function view(){
        return view(_get_frontend_theme_path('pages.product'));
    }
    public function cates(){
        return view(_get_frontend_theme_path('pages.category'));
    }
}
