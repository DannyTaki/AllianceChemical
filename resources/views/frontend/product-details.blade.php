@extends('layouts.master')

@section('title')
  Product
@endsection

@section('content')
<div class="container product-details">
  <h1 class="pull-left">{{ $product->title }}</h1>
  <h4 class="pull-left clearfix">{{ $product->description }}</h4>
  <div class="thumbnail detail-img">
     <img src="{{ URL::to($product->imagePath) }}" alt="" class="img-responsive">
  </div>
    <div class="price-section">
      <p class="pull-left price text-success">${{ $product->price}}</p>
      <button class="pull-right btn btn-primary add-to-cart" type="submit success" value="Add to Cart">Add to Cart</button>
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
