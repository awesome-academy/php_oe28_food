<!-- Header Start Here -->
<header id="header">
    <div class="main_header">
        <div class="top_nav" id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="index.html" title="Crave Ordering"><img src="images\logo.png" alt="Crave Ordering"></a>
                        </div>
                        <div class="nav_manu">
                            <div class="Menu_list">
                                <ul class="menu">
                                    <li><a href="#" class="trans hvr-underline-from-left">{{ __('messages.home') }}</a></li>
                                    <li><a href="#" class="trans">{{ __('messages.about') }}</a></li>
                                    <li><a href="#" class="trans">{{ __('messages.order') }}</a></li>
                                    <li><a href="#" class="trans">{{ __('messages.login') }}</a></li>
                                    <li><a href="#" class="trans">{{ __('messages.register') }}</a></li>
                                </ul>
                            </div>
                            <div class="cart">
                                <a href="cart.html" title="Cart">
                                    <span class="Cart_count" id='cart_count'>Cart : (0) $00.00</span>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <img class="cart_img" src="images\cart_1.webp" alt="cart_1">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="burger" class="open-main-nav">
            <span class="burger"></span>
        </button>
        <div class="H_banner home">
            <div class="main_pitch">
                <h1 class="page_title">{{ __('messages.page_title') }}</h1>
                <h3 class="cntct">{{ __('messages.call_us') }}<span class="call_desk"><a href="tel:+01234567890" id="typewriter_num"></a></span></h3>
            </div>
        </div>
        <div class="bottom_pitch">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_bpitch">
                            <ul class=" d-flex list-inline mx-auto justify-content-center">
                                <li class="pizza active"><a href="menu.html" class="trans" title="Pizza"><span class="icon">{{ __('messages.foods') }}</span></a></li>
                                <li class="drinks"><a href="menu.html" class="trans" title="Drinks"><span class="icon">{{ __('messages.drinks') }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="device">
        <nav class="main-nav" id="main-nav">
            <div class="logo">
                <a href="index.html" title="Crave Ordering"><img src="images\logoBlack.png" alt="Crave Ordering"></a>
            </div>
            <ul>
                <li><a href="#">{{ __('messages.home') }}</a></li>
                <li><a href="#">{{ __('messages.about') }}</a></li>
                <li><a href="#">{{ __('messages.order') }}</a></li>
                <li><a href="#">{{ __('messages.login') }}</a></li>
                <li><a href="#">{{ __('messages.register') }}</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header End Here -->
