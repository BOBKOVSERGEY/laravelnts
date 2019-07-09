<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Psy\debug;

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

    public function testGet(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');;
        return view('testget', compact('name', 'age'));
    }

    public function testPost()
    {
        return view('testpost');
    }
}
