<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage(){
        return view('Products.Food-beverage');
    }

    public function beautyHealth(){
        return view('Products.Beauty-health');
    }

    public function homeCare(){
        return view('Products.Home-care');
    }

    public function babyKid(){
        return view('Products.Baby-kid');
    }

}
