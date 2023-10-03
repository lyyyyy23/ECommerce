<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ShoeCollectionController extends BaseController
{

    private $shoes;

    function __construct()
    {
        $this->shoes = new ProductModel();
    }
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
        $data =[
            'products' => $this->shoes->findAll()
        ];
        return view('shoes/shop', $data);
    }
    public function singleProd()
    {
        return view('shoes/single-product');
    }
    public function checkout()
    {
        return view('shoes/checkout');
    }
    public function singleProduct($ID = null)
    {
        $data =[
            'selectedProduct' => $this->shoes->where('productID', $ID)->first()
        ];
        return view('shoes/single-product' , $data);
    }
}
