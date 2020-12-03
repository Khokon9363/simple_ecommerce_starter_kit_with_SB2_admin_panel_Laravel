<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show()
    {
        return view('shop.shop');
    }
    public function about()
    {
        return view('shop.about');
    }
    public function contact()
    {
        return view('shop.contact');
    }
    public function product()
    {
        return view('shop.product');
    }
    public function single()
    {   
        return view('shop.single');
    }
}
