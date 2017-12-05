@extends('layouts.master')
@section('site-title') strona główna @endsection

@section('site-content')
     <div class="carousel slide" id="sl-hello-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
               <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
               <div class="carousel-item active">
                    <img class="d-block w-100" src="https://wallpaper.wiki/wp-content/uploads/2017/05/Camper-vans-for-sale-wallpapers-1920x1080.jpg" alt="First slide"/>
                    <div class="carousel-caption d-none d-md-block">
                         <h3>Witaj na Sweetliving!</h3>
                         <p><a href="">Idź do sklepu</a></p>
                    </div>
               </div>
               <div class="carousel-item">
                    <img class="d-block w-100" src="https://wallpapercave.com/wp/ElOo7dZ.jpg" alt="second slide"/>
                    <div class="carousel-caption d-none d-md-block">
                         <h3>SL Collection</h3>
                         <p><a href="">Idź do sklepu</a></p>
                    </div>
               </div>
               <div class="carousel-item">
                    <img class="d-block w-100" src="http://goldwallpapers.com/uploads/posts/classic-cars-wallpapers-free/classic_cars_wallpapers_free_023.jpg" alt="third slide"/>
               </div>
               <div class="carousel-item">
                    <img class="d-block w-100" src="https://lh3.googleusercontent.com/nbxr8mAKd_m9q1ODpOPddz3mSeoPMaSGTqZl69xOQAMT8bsRLDB16WF8HSoChZDWM5U=h900" alt="forth slide"/>
               </div>
               <div class="carousel-item">
                    <img class="d-block w-100" src="http://getwallpapers.com/wallpaper/full/b/3/3/458630.jpg" alt="fifth slide"/>
               </div>
          </div>
          <a class="carousel-control-prev" href="#sl-hello-carousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#sl-hello-carousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
          </a>
     </div>
          <div class="content-box">
               <p class="sl-blockqoute">
                    <b>Sweet Living Home Inspirations</b> to wyjątkowe miejsce, które powstało z pasji oraz <b>zamiłowania</b> do piękna i estetyki. Naszą misją jest <b>aranżacja</b> przytulnych wnętrz urządzonych ze smakiem, w których gości zarówno <b>elegancja</b> i <b>nietuzinkowość</b> jak i <b>domowa atmosfera</b>. Tworzymy projekty wnętrz w stylu <b>Hampton</b>, <b>New England</b> oraz <b>glamour</b>, które stanowią uosobienie <b>luksusu</b>, a każdy detal nabiera unikalnego charakteru. Zapraszamy do naszego <b>showroomu w Warszawskim Wilanowie</b>, gdzie na miejscu można zapoznać się z bogatą ekspozycją artykułów dekoracyjnych. Oferowane w Sweet Living marki to: <b>Riviera Maison</b>, <b>Eichholtz</b>, <b>Bloomingville</b>, <b>MTI Furninova</b>, <b>Lene Bjerre</b>, <b>Thibaut</b>, <b>Ralph Lauren</b> oraz <b>Hilding</b>.
               </p>
               <div class="news">
                    <header class="sl-section-header">
                         <h1 class="sl-section-title">Aktualności</h1>
                    </header>
                    <main class="sl-section-content">
                         <div class="sl-grid-row">
                              <div class="sl-card">
                                   <img class="sl-card-img" src="https://sweetliving.pl/image/cache/catalog/SLBOZENARODZENIE/katalog-500x500.JPG"/>
                                   <div class="sl-card-body">
                                        <h2 class="sl-card-title">Katalog świąteczny Sweet Living</h2>
                                        <p class="sl-card-paragraph">Zapraszamy do obejrzenia katalogu z propozycją świątecznych aranżacji, produktów dekoracyjnych i autorskich bombek SL Collection. Sprawdź nasze propozycje i zainspiruj się!</p><a class="sl-btn sl-btn-filled sl-btn-upper sl-card-btn" href="">Więcej</a>
                                   </div>
                              </div>
                              <div class="sl-card">
                                   <img class="sl-card-img" src="https://sweetliving.pl/image/cache/catalog/BLOG/szafki_nocne_sl_collection/insta%20DSC_1974-500x500.jpg"/>
                                   <div class="sl-card-body">
                                        <h2 class="sl-card-title">Szafki nocne SL Collection</h2>
                                        <p class="sl-card-paragraph">Zobaczcie koniecznie nowy wpis na blogu, w którym prezentujemy autorską linię szafek nocnych SL Collection. Nie zabraknie też inspiracji jak aranżować szafki i stoliki nocne.</p><a class="sl-btn sl-btn-filled sl-btn-upper sl-card-btn" href="">Więcej</a>
                                   </div>
                              </div>
                              <div class="sl-card">
                                   <img class="sl-card-img" src="https://sweetliving.pl/image/cache/catalog/AAAANEWSY/PODUSZKA_DEKORACYJNA_LETITSNOW-500x500.jpg"/>
                                   <div class="sl-card-body">
                                        <h2 class="sl-card-title">Świąteczne poduszki SL Collection</h2>
                                        <p class="sl-card-paragraph">W Sweet Living znajdziesz limitowaną edycję pięknych, welurowych, miłych w dotyku, haftowanych poduszek, w kolorze czerwonym. Zapraszamy do showroomu i do działu poduszki w sklepie internetowym.</p><a class="sl-btn sl-btn-filled sl-btn-upper sl-card-btn" href="">Więcej</a>
                                   </div>
                              </div>
                         </div>
                    </main>
               </div>
               <div class="latest">
                    <header class="sl-section-header">
                         <h1 class="sl-section-title">Najnowsze</h1>
                    </header>
                    <main class="sl-section-content">
                         <div class="product-slider">
                              <section class="carousel slide" data-ride="carousel" id="postsCarousel">
                                   <div class="row">
                                        <div class="col-xs-12 text-md-right lead">
                                             <a class="sl-btn sl-btn-filled prev" href="" title="go back">
                                                  <i class="fa fa-lg fa-chevron-left"></i>
                                             </a>
                                             <a class="sl-btn sl-btn-filled next" href="" title="more">
                                                  <i class="fa fa-lg fa-chevron-right"></i>
                                             </a>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="carousel-inner">
                                             <div class="row row-equal carousel-item active m-t-0">
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                             </div>
                                             <div class="row row-equal carousel-item m-t-0">
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                                  <div class="col-md-3">
                                                       <a class="sl-product-slider-product" href="">
                                                            <img class="sl-product-slider-img" src="https://sweetliving.pl/image/cache/catalog/LOCHERBER/cosval_420020-200x200.jpg"/>
                                                            <h1 class="sl-product-slider-title">Dyfuzor zapachowy locherber tangerine & cinnamon L</h1>
                                                            <h2 class="sl-product-slider-price">299.00 PLN</h2>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </section>
                         </div>
                    </main>
               </div>
          @include('partials/logo-slider')
          </div>
     @endsection
