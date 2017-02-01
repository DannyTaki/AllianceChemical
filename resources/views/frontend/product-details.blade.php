@extends('layouts.master')

@section('title')
  Product
@endsection

@section('content')
<div class="container product-details">
  <h1 class="pull-left">{{ $product->title }}</h1>
  <h4 class="pull-left clearfix">{{ $product->description }}</h4>
  <div class="thumbnail detail-img">
     <img src="{{ URL::to($product->imagePath2) }}" alt="" class="img-responsive">
  </div>
    <div class="price-section">
      <p class="pull-left price text-success">${{ $product->price}}</p>
      <a href="{{ route('product.addToCart', [ 'id' => $product->id ]) }}" class="pull-right btn btn-primary" id="add-to-cart" role="button" >Add to Cart</a>
    </div>
  <table class="table table-striped">
    <tr>
      <th>Cat Code</th>
      <th>Description</th>
      <th>Packaging</th>
      <th>Quantity</th>
      <th>Availability</th>
      <th>Price</th>
      <th>Add Quantity<th>
    </tr>
    <tr>
      <th>Cat Code</th>
      <th>{{ $product->title }}</th>
      <th>Packaging</th>
      <th>{{ $product->units . ' ' . $product->resolveAbbrev($product->id)}}
      <th class="text-danger">IN STOCK</th>
      <th class="text-success">${{ $product->price }}</th>
      <th>
        <input type="text" class="add_qty">
      </th>
    </tr>
  </table>
</div>

@endsection
