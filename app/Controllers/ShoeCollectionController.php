<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ShoeCollectionController extends BaseController
{
    public function index()
    {
        return view('shoes/home');
    }

    public function aboutShop()
    {
        return view('shoes/about');
    }
    public function blog()
    {
        return view('shoes/blog');
    }
    public function contact()
    {
        return view('shoes/contact');
    }
    public function cart()
    {
        return view('shoes/cart');
    }
    public function shop()
    {
        return view('shoes/shop');
    }
    public function singleProd()
    {
        return view('shoes/single-product');
    }
    public function checkout()
    {
        return view('shoes/checkout');
    }
}
