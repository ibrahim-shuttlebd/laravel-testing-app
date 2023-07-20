<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();

        if($products){
            return $products;
        }else{
            return "No products found";
        }
    }
}
