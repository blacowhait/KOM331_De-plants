<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepageController extends Controller
{
    public function __invoke()
    {
        return view('prepage');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function flow()
    {
        return view('workflow');
    }
}
