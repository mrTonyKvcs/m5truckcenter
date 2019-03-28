<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.index');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function garage()
    {
        return view('pages.garage');
    }

    public function commerce()
    {
        return view('pages.commerce');
    }

    public function tender()
    {
        return view('pages.tender');
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
