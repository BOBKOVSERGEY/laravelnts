<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //return 'Main page';
        return view('index');
    }

    public function about()
    {
        return 'About page';
    }
}
