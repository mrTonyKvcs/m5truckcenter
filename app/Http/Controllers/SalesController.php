<?php

namespace App\Http\Controllers;

use App\SalesSubscribe;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('sale.index');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'email' => 'required|unique:sales_subscribes',
            'phone' => 'required|unique:sales_subscribes',
        ]);

        $subscribe = SalesSubscribe::create([
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return back();
    }
}
