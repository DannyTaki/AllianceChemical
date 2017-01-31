@extends('layouts.master')

@section('title')
  Alliance Chemical
@endsection

@section('content')
  @foreach($products->chunk(3) as $productChunk)
  <div class="row">
    @foreach($productChunk as $product)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail welcome">
        <a href="{{ route('frontend.product-details', ['id' => $product->id]) }}"><img src="{{ URL::to($product->imagePath) }}" alt="" class="img-responsive"></a>
      </div>
        <a href="{{ route('frontend.product-details', ['id' => $product->id]) }}"><h3>{{ $product->title }}</h3></a>
    </div>
    @endforeach
  </div>
  @endforeach
@endsection
