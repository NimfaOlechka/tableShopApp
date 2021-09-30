<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function __invoke()
    {
        //dd(Product::all());
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    /* public function index()
    {
        $products = Product::with(['description' => function ($q) {

            // query related table
            $q->where('languages_id', '1');
          
          }])->all();

          ddd($products);

          return view('products.index', [
              'products' => $products
          ]);
    } */
    
}
