<?php

namespace App\Http\Controllers;

use App\Chemical;
use App\User;
use App\Http\Controllers\Controller;
use Session;
use App\Cart;
use Illuminate\Http\Request;

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

  public function getAddToCart(Request $request, $id) {
    $product = Chemical::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);

    $request->session()->put('cart', $cart);
    return redirect()->route('frontend.product-details', ['id' => $id]);
  }

  public function getCart() {
    if (!Session::has('cart')) {
      return view('shop.shopping-cart', ['products' => null]);
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }
}
