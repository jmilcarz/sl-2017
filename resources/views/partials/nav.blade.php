<nav id="sl-sitenav">
     <div class="nav-bar__shadow">
          <div class="sl-container">
               <ul class="info">
                    <li><a href=""><i class="fa fa-phone"></i>22 498 54 56</a></li>
                    <li><a href="mailto:sklep@sweetliving.pl"><i class="fa fa-envelope"></i>sklep@sweetliving.pl</a></li>
               </ul>
               <ul class="auth">
                    <li class="added-mobile"><a href=""><i class="fa fa-phone"></i>22 498 54 56</a></li>
                    @if (Auth::guest())
                         <li><a href="{{ route('login') }}">Zaloguj się</a></li>
                         <li><a class="sl-btn" href="{{ route('register') }}">Załóż konto</a></li>
                    @else
                         {{-- <li><a href="{{ route('user/profile') }}"><i class="fa fa-user-circle"></i></a></li> --}}
                         <li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a></li>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                    @endif
                    <li>
                         <a href="{{ route('shop.shoppingCart') }}">
                              <i class="fa fa-shopping-cart"></i>
                              <sup><small><span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></small></sup>
                         </a>
                    </li>
                    <li class="mobile" id="toggleSearchMobile"><a><i class="fa fa-search"></i></a></li>
               </ul>
          </div>
     </div>
     <a class="nav-bar__logo_mobile" href=""><img src="{{ asset('img/logo.png') }}"/></a>
     <div class="nav-bar"><i class="fa fa-bars" id="toggleSiteMobileMenu"></i>
          <div class="sl-container" id="mobileNav">
          {{-- <ul class="links">
          <li><a href=""><i class="fa fa-home"></i></a></li>
          <li><a href="{{ route('sklep') }}">Sklep Online</a></li>
          <li><a class="sl-collection" href="{{ route('sl-collection') }}">SL Collection</a></li>
          <li><a href="{{ route('projektowanie') }}">Projektowanie</a></li>
          </ul><a class="nav-bar__logo" href="{{ route('/') }}"><img src="{{ asset('img/logo.png') }}"/></a>
          <ul class="links">
          <li><a href="{{ route('o-nas') }}">O Nas</a></li>
          <li><a href="{{ route('wspolpraca') }}">Współpraca</a></li>
          <li><a href="{{ route('marki') }}">Marki</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li> --}}
          <li class="desktop" id="toggleSearch"><a><i class="fa fa-search"></i></a></li>
          </ul>
          </div>
     </div>
     <div class="nav-search-box">
          <div class="sl-container">
               <form action="" method="get">
                    <input type="search" name="q" placeholder="Szukaj marek, mebli i innych..."/>
                    <button type="submit">search</button>
               </form>
               <i class="fa fa-close" id="closeMenu"></i>
          </div>
     </div>
</nav>
