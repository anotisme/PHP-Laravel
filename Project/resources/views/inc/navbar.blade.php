<section id="menu" class="menu-block">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="site-logo">
                    <img class="sh-standard-logo" src="//cdn.jevelin.shufflehound.com/wp-content/uploads/2016/05/Je_Logo_black_big.png" alt="Jevelin WordPress Theme" height="23">
                </div>
            </div>
            <div class="col-md-10 col-sm-12">
                <nav>
                    <ul id="menu-header-nav" class="nav-menu">
                        <li class="menu-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="/shop">Shop</a>
                        </li>
                        <li class="menu-item">
                            <a href="/portfolio">Porfolio</a>
                        </li>
                        <li class="menu-item sh-nav-cart sh-nav-special sh-header-builder-main-element-cart">
                            <a href="https://jevelin.shufflehound.com/shop/cart/" class="sf-with-ul">
                                <div class="sh-nav-cart-content">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="sh-header-cart-count cart-icon sh-group">
                                    <span>0</span>
                                    </div>
                                </div>
                            </a>
                            <ul class="sub-menu" style="display: none; margin-top: -10px;">
                                <li class="menu-item menu-item-cart">
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item sh-nav-social sh-nav-special">
                            <a href="http://www.twitter.com/TheShufflehound" target="_blank" class="social-media-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.facebook.com/shufflehound" target="_blank" class="social-media-facebook">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            <a href="http://jevelin.shufflehound.com" target="_blank" class="social-media-instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <div class="sh-clear"></div>
                        </li>
                        <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            <li class="menu-item">
                                <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="menu-item">
                                    <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="menu-item dropdown">
                                <a id="navbarDropdown" class="link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
