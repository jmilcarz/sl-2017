@extends('layouts.master')
@section('site-title') koszyk @endsection
@section('site-content')
     <div class="content-box">
          <header class="sl-section-header">
               <h1 class="sl-section-title">Koszyk</h1>
          </header>
          <main class="sl-section-content">
               @if (Session::has('cart'))
                    <div class="row">
                         <div class="card col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                              <ul class="list-group">
                                   @foreach ($products as $product)
                                        <li class="list-group-item">
                                             <span class="badge">{{ $product['qty'] }}</span>
                                             <strong>{{ $product['item']['product_name'] }}</strong>
                                             <span class="label label-warning">{{ $product['price'] }}</span>
                                             <div class="btn-group">
                                                  <button class="btn btn-xs dropdown-toggle" type="button" id="dropdownMenu{{ $product['item']['id'] }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $product['item']['id'] }}">
                                                       <li><a href="">Zmniejsz o 1</a></li>
                                                       <li><a href=""><i class="fa fa-trash"></i> Wykasuj przedmiot</a></li>
                                                  </ul>
                                             </div>
                                        </li>
                                   @endforeach

                              </ul>
                              <div>
                                   <p class="pull-left">Razem: <strong>{{ $totalPrice }} PLN</strong></p>
                                   <button type="button" class="sl-btn sl-btn-filled pull-right">Przejdź do kasy</button>
                              </div>

                         </div>
                    </div>
               @else
                    <div class="row">
                         <h2 class="text-center">Brak produktów w koszyku.</h2>
                         <a href="{{ route('shop.index') }}" class="text-center"><i class="fa fa-angle-left"></i> wróć do sklepu</a>
                    </div>
               @endif
          </main>
          @include('partials/logo-slider')
     </div>
@endsection
