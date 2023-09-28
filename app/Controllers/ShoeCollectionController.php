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
}
