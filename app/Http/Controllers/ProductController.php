<?php

namespace App\Http\Controllers;

use App\Chemical;
use App\User;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

  public function getIndex() {
    $products = Chemical::all();
    return view('welcome', ['products' => $products]);
  }

  public function fetchProduct($id) {
    $product = Chemical::find($id);
    return view('frontend.product-details', ['product' => $product]);
  }
}
