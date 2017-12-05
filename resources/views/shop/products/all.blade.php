@extends('layouts.master')
@section('site-title') wszystkie produkty @endsection
@section('site-content')
     <div class="content-box">
          @if (count($products) < 1)
               pusto
          @else
               @foreach ($products->chunk(3) as $productChunk)
                    <div class="row">
                         @foreach ($productChunk as $product)
                              <div class="col-sm-6 col-md-4">
                                   <div class="card">
                                        <img class="card-img-top" src="{{ $product->product_image }}" alt="Card image cap" style="height: 250px; object-fit: cover; width: 150px; margin: 0 auto;">
                                        <div class="card-body">
                                             <h4 class="card-title">{{ $product->product_name }}</h4>
                                             <p class="card-text">{{ $product->product_description }}</p>
                                             <a href="#" class="sl-btn sl-btn-filled"><i class="fa fa-shopping-cart"></i> dodaj do koszyka</a>
                                             <b class="pull-right">{{ $product->product_price }}.00 PLN</b>
                                        </div>
                                   </div>
                              </div>
                         @endforeach
                    </div>
               @endforeach
          @endif
          @include('partials/logo-slider')
     </div>
@endsection
