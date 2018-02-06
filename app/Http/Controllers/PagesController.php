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

    public function products()
    {
        return view('pages.products');
    }

    public function tender()
    {
        return view('pages.tender');
    }

    public function sale()
    {
        return view('pages.sale');
    }

    public function saleSubscribe()
    {
        return back();
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
