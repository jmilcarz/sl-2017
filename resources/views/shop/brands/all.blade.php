@extends('layouts.master')
@section('site-title') wszystkie marki @endsection
@section('site-content')
     <div class="content-box">
          @if (count($brands) < 1)
               pusto
          @else
               @foreach ($brands->chunk(3) as $brandChunk)
                    <div class="row">
                         @foreach ($brandChunk as $brand)
                              <div class="col-sm-6 col-md-4">
                                   <div class="card">
                                        <img class="card-img-top" src="{{ $brand->brand_image }}" alt="Card image cap" style="height: 250px; object-fit: cover; width: 150px; margin: 0 auto;">
                                        <div class="card-body">
                                             <h4 class="card-title">{{ $brand->brand_name }}</h4>
                                             <p class="card-text">{{ $brand->brand_description }}</p>
                                             <a href="#" class="sl-btn sl-btn-filled">zobacz wszystkie produkty</a>
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
