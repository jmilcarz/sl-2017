<nav id="sl-sitenav">
     <div class="nav-bar__shadow">
          <div class="sl-container">
               <ul class="info">
                    <li><a href=""><i class="fa fa-phone"></i>22 498 54 56</a></li>
                    <li><a href="mailto:sklep@sweetliving.pl"><i class="fa fa-envelope"></i>sklep@sweetliving.pl</a></li>
               </ul>
               <ul class="auth">
                    <li class="added-mobile"><a href=""><i class="fa fa-phone"></i>22 498 54 56</a></li>
                    <li><a href="login">Zaloguj się</a></li>
                    <li><a class="sl-btn" href="register">Załóż konto</a></li>
                    <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                    <li class="mobile" id="toggleSearchMobile"><a><i class="fa fa-search"></i></a></li>
               </ul>
          </div>
     </div>
     <a class="nav-bar__logo_mobile" href=""><img src="{{ asset('img/logo.png') }}"/></a>
     <div class="nav-bar"><i class="fa fa-bars" id="toggleSiteMobileMenu"></i>
          <div class="sl-container" id="mobileNav">
          <ul class="links">
          <li><a href=""><i class="fa fa-home"></i></a></li>
          <li><a href="">Sklep Online</a></li>
          <li><a class="sl-collection" href="">SL Collection</a></li>
          <li><a href="">Projektowanie</a></li>
          </ul><a class="nav-bar__logo" href=""><img src="{{ asset('img/logo.png') }}"/></a>
          <ul class="links">
          <li><a href="">O Nas</a></li>
          <li><a href="">Współpraca</a></li>
          <li><a href="">Marki</a></li>
          <li><a href="">Blog</a></li>
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
