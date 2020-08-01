@if (Request::is('naijamarket/product/*'))
<header class="header header--product" data-sticky="true" >
    <nav class="navigation">
        <div class="container">
            <article class="ps-product--header-sticky">
                <div class="ps-product__thumbnail"><img src="{{ productImage($product->cover_img) }}" alt="{{ $product->name }}" /></div>
                <div class="ps-product__wrapper">
                    <div class="ps-product__content"><a class="ps-product__title" href="#">{{ $product->name }}</a>
                        <ul class="ps-tab-list">
                            <li class="active"><a href="#tab-1">Description</a></li>
                            <li><a href="#tab-2">Specification</a></li>
                            <li><a href="#tab-4">Reviews (1)</a></li>
                            <li><a href="#tab-6">More Offers</a></li>
                        </ul>
                    </div>
                    <div class="ps-product__shopping"><span class="ps-product__price"><span>₦{{$product->price}}</span>
                        <del>₦100.56</del></span><a class="ps-btn" href="{{route('cart.add',$product->id)}}"> Add to Cart</a></div>
                </div>
            </article>
        </div>
    </nav>
</header>
@else
<div class="ps-block--promotion-header bg--cover" data-background="{{ asset('front_assets/img/promotions/header-promotion.jpg') }}">
    <div class="container">
        <div class="ps-block__left">
            <h3>20%</h3>
            <figure>
                <p>Discount</p>
                <h4>For Fashion</h4>
            </figure>
        </div>
        <div class="ps-block__center">
            <p>Enter Promotion<span>Sale2020</span></p>
        </div><a class="ps-btn ps-btn--sm" href="#">Shop now</a>
    </div>
</div>
@endif
<header class="header header--standard header--market-place-1" data-sticky="{{Request::is('naijamarket/product/*')? 'false': 'true'}}">
    <div class="header__top">
        <div class="container">
            <div class="header__left">
                <p>Welcome to NaiijaMarket Online Shopping Store !</p>
            </div>
            <div class="header__right">
                <ul class="header__top-links">
                @if (Auth::check() && Auth::user()->shop)
                    <li><a href="{{ route('shops.show', Auth::user()->shop->id) }}">View Shop on NaiijaMarket</a></li>
                @else
                    <li><a href="{{ route('shops.create') }}">Sell on NaiijaMarket</a></li>
                @endif
                    <li><a href="#">Track Your Order</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header__content">
        <div class="container">
            <div class="header__content-left">
                <div class="menu--product-categories">
                    <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                    <div class="menu__content">
                        <ul class="menu--dropdown">
                            <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Electronic<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Home Audio &amp; Theathers</a>
                                            </li>
                                            <li><a href="#">TV &amp; Videos</a>
                                            </li>
                                            <li><a href="#">Camera, Photos &amp; Videos</a>
                                            </li>
                                            <li><a href="#">Cellphones &amp; Accessories</a>
                                            </li>
                                            <li><a href="#">Headphones</a>
                                            </li>
                                            <li><a href="#">Videosgames</a>
                                            </li>
                                            <li><a href="#">Wireless Speakers</a>
                                            </li>
                                            <li><a href="#">Office Electronic</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Digital Cables</a>
                                            </li>
                                            <li><a href="#">Audio &amp; Video Cables</a>
                                            </li>
                                            <li><a href="#">Batteries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                            </li>
                            <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                            </li>
                            <li><a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                            </li>
                            <li><a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Computer &amp; Tablets</a>
                                            </li>
                                            <li><a href="#">Laptop</a>
                                            </li>
                                            <li><a href="#">Monitors</a>
                                            </li>
                                            <li><a href="#">Networking</a>
                                            </li>
                                            <li><a href="#">Drive &amp; Storages</a>
                                            </li>
                                            <li><a href="#">Computer Components</a>
                                            </li>
                                            <li><a href="#">Security &amp; Protection</a>
                                            </li>
                                            <li><a href="#">Gaming Laptop</a>
                                            </li>
                                            <li><a href="#">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                            </li>
                            <li><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                            </li>
                            <li><a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                            </li>
                            <li><a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                            </li>
                            <li><a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                            </li>
                            <li><a href="#"><i class="icon-wrench"></i> Home Improments</a>
                            </li>
                            <li><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                            </li>
                        </ul>
                    </div>
                </div><a class="ps-logo" href="index.html"><img src="{{ asset('front_assets/img/logo.png') }}" alt=""></a>
            </div>
            <div class="header__content-center">
                <form class="ps-form--quick-search" action="{{route('products.search')}}" method="get">
                    <input name="query" class="form-control" type="text" placeholder="I'm shopping for...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="header__content-right">
                <div class="header__actions"><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                    <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>

                    @auth
                        <livewire:cart-count />
                    @else
                        0
                    @endauth</i></span></a>
                        <div class="ps-cart__content">
                            <livewire:menu-drop-down-cart />
                        </div>
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i></div>
                        <div class="ps-block__right">
                            @guest
                            <a href="{{route('login')}}">Login</a><a href="{{route('register')}}">Register</a></div>
                            @else
                            <a href="my-account.html">My Account</a><a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container">
            <div class="navigation__left">
                <div class="menu--product-categories">
                    <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                    <div class="menu__content">
                        <ul class="menu--dropdown">
                            <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Electronic<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Home Audio &amp; Theathers</a>
                                            </li>
                                            <li><a href="#">TV &amp; Videos</a>
                                            </li>
                                            <li><a href="#">Camera, Photos &amp; Videos</a>
                                            </li>
                                            <li><a href="#">Cellphones &amp; Accessories</a>
                                            </li>
                                            <li><a href="#">Headphones</a>
                                            </li>
                                            <li><a href="#">Videosgames</a>
                                            </li>
                                            <li><a href="#">Wireless Speakers</a>
                                            </li>
                                            <li><a href="#">Office Electronic</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Digital Cables</a>
                                            </li>
                                            <li><a href="#">Audio &amp; Video Cables</a>
                                            </li>
                                            <li><a href="#">Batteries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                            </li>
                            <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                            </li>
                            <li><a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                            </li>
                            <li><a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Computer &amp; Tablets</a>
                                            </li>
                                            <li><a href="#">Laptop</a>
                                            </li>
                                            <li><a href="#">Monitors</a>
                                            </li>
                                            <li><a href="#">Networking</a>
                                            </li>
                                            <li><a href="#">Drive &amp; Storages</a>
                                            </li>
                                            <li><a href="#">Computer Components</a>
                                            </li>
                                            <li><a href="#">Security &amp; Protection</a>
                                            </li>
                                            <li><a href="#">Gaming Laptop</a>
                                            </li>
                                            <li><a href="#">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                            </li>
                            <li><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                            </li>
                            <li><a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                            </li>
                            <li><a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                            </li>
                            <li><a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                            </li>
                            <li><a href="#"><i class="icon-wrench"></i> Home Improments</a>
                            </li>
                            <li><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navigation__right">
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Shop</a></li>
                    <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Categories</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Product Layout<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="product-default.html">Default</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Product Types<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                    </li>
                                    <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                    </li>
                                    <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                    </li>
                                    <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                    </li>
                                    <li class="current-menu-item "><a href="compare.html">Compare</a>
                                    </li>
                                    <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                    </li>
                                    <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                    </li>
                                    <li class="current-menu-item "><a href="checkout-2.html">Checkout 2</a>
                                    </li>
                                    <li class="current-menu-item "><a href="shipping.html">Shipping</a>
                                    </li>
                                    <li class="current-menu-item "><a href="payment.html">Payment</a>
                                    </li>
                                    <li class="current-menu-item "><a href="payment-success.html">Payment Success</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="index.html">About</a></li>
                    <li><a href="index.html">Contact</a></li>
                    <li><a href="index.html">FAQ</a></li>
                </ul>
                <div class="ps-block--header-hotline inline">
                    <p><i class="icon-telephone"></i>Hotline:<strong> +234-705-0807-509</strong></p>
                </div>
            </div>
        </div>
    </nav>
</header>
<header class="header header--mobile" data-sticky="true">
    <div class="header__top">
        <div class="header__left">
            <p>Welcome to NaiijaMarket Online Shopping Store!</p>
        </div>
        <div class="header__right">
            <ul class="navigation__extra">
                @if (Auth::check() && Auth::user()->shop)
                    <li><a href="{{ route('shops.show', Auth::user()->shop->id) }}">View Shop on NaiijaMarket</a></li>
                @else
                    <li><a href="{{ route('shops.create') }}">Sell on NaiijaMarket</a></li>
                @endif
                <li><a href="#">Tract your order</a></li>
                <li>
                    <div><a href="#">Tract your order</a></div>
                </li>
                <li>
                @if (Auth::check() && Auth::user()->shop)
                    <div><a href="{{ route('shops.show', Auth::user()->shop->id) }}">View Shop on NaiijaMarket</a></div>
                @else
                    <div><a href="{{ route('shops.create') }}">Sell on NaiijaMarket</a></div>
                @endif
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation--mobile">
        <div class="navigation__left"><a class="ps-logo" href="index.html"><img src="{{ asset('front_assets/img/logo_light.png') }}" alt=""></a></div>
        <div class="navigation__right">
            <div class="header__actions">
                <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>
                    @auth
                        <livewire:cart-count />
                    @else
                        0
                    @endauth
                    </i></span></a>
                    <div class="ps-cart__content">
                        <livewire:menu-drop-down-cart />
                    </div>
                </div>
                <div class="ps-block--user-header">
                    <div class="ps-block__left"><i class="icon-user"></i></div>
                    <div class="ps-block__right">
                        @guest
                            <a href="{{route('login')}}">Login</a><a href="{{route('register')}}">Register</a></div>
                            @else
                            <a href="my-account.html">My Account</a><a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form2').submit();">Logout</a>
                            <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="ps-search--mobile">
        <form class="ps-form--search-mobile" action="{{route('products.search')}}" method="get">
            <div class="form-group--nest">
                <input name="query" class="form-control" type="text" placeholder="Search something...">
                <button type="submit"><i class="icon-magnifier"></i></button>
            </div>
        </form>
    </div>
</header>
<div class="navigation--list">
    <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
</div>
<div class="ps-panel--sidebar" id="search-sidebar">
    <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="{{route('products.search')}}" method="get">
            <div class="form-group--nest">
                <input name="query" class="form-control" type="text" placeholder="Search something...">
                <button type="submit"><i class="icon-magnifier"></i></button>
            </div>
        </form>
    </div>
    <div class="navigation__content"></div>
</div>
<div class="ps-panel--sidebar" id="menu-mobile">
    <div class="ps-panel__header">
        <h3>Menu</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">
            <li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                <ul class="sub-menu">
                    <li><a href="index.html">Marketplace Full Width</a>
                    </li>
                    <li><a href="homepage-2.html">Home Auto Parts</a>
                    </li>
                    <li><a href="homepage-10.html">Home Technology</a>
                    </li>
                    <li><a href="homepage-9.html">Home Organic</a>
                    </li>
                    <li><a href="homepage-3.html">Home Marketplace V1</a>
                    </li>
                    <li><a href="homepage-4.html">Home Marketplace V2</a>
                    </li>
                    <li><a href="homepage-5.html">Home Marketplace V3</a>
                    </li>
                    <li><a href="homepage-6.html">Home Marketplace V4</a>
                    </li>
                    <li><a href="homepage-7.html">Home Electronic</a>
                    </li>
                    <li><a href="homepage-8.html">Home Furniture</a>
                    </li>
                    <li><a href="homepage-kids.html">Home Kids</a>
                    </li>
                    <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="shop-default.html">Shop Default</a>
                            </li>
                            <li><a href="shop-default.html">Shop Fullwidth</a>
                            </li>
                            <li><a href="shop-categories.html">Shop Categories</a>
                            </li>
                            <li><a href="shop-sidebar.html">Shop Sidebar</a>
                            </li>
                            <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                            </li>
                            <li><a href="shop-carousel.html">Shop Carousel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Product Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="product-default.html">Default</a>
                            </li>
                            <li><a href="product-extend.html">Extended</a>
                            </li>
                            <li><a href="product-full-content.html">Full Content</a>
                            </li>
                            <li><a href="product-box.html">Boxed</a>
                            </li>
                            <li><a href="product-sidebar.html">Sidebar</a>
                            </li>
                            <li><a href="product-default.html">Fullwidth</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Product Types<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="product-default.html">Simple</a>
                            </li>
                            <li><a href="product-default.html">Color Swatches</a>
                            </li>
                            <li><a href="product-image-swatches.html">Images Swatches</a>
                            </li>
                            <li><a href="product-countdown.html">Countdown</a>
                            </li>
                            <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                            </li>
                            <li><a href="product-instagram.html">Instagram</a>
                            </li>
                            <li><a href="product-affiliate.html">Affiliate</a>
                            </li>
                            <li><a href="product-on-sale.html">On sale</a>
                            </li>
                            <li><a href="product-video.html">Video Featured</a>
                            </li>
                            <li><a href="product-groupped.html">Grouped</a>
                            </li>
                            <li><a href="product-out-stock.html">Out Of Stock</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Woo Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li><a href="checkout.html">Checkout</a>
                            </li>
                            <li><a href="whishlist.html">Whishlist</a>
                            </li>
                            <li><a href="compare.html">Compare</a>
                            </li>
                            <li><a href="order-tracking.html">Order Tracking</a>
                            </li>
                            <li><a href="my-account.html">My Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Basic Page<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="about-us.html">About Us</a>
                            </li>
                            <li><a href="contact-us.html">Contact</a>
                            </li>
                            <li><a href="faqs.html">Faqs</a>
                            </li>
                            <li><a href="comming-soon.html">Comming Soon</a>
                            </li>
                            <li><a href="404-page.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="become-a-vendor.html">Become a Vendor</a>
                            </li>
                            <li><a href="vendor-store.html">Vendor Store</a>
                            </li>
                            <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                            </li>
                            <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Blog Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="blog-grid.html">Grid</a>
                            </li>
                            <li><a href="blog-list.html">Listing</a>
                            </li>
                            <li><a href="blog-small-thumb.html">Small Thumb</a>
                            </li>
                            <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Single Blog<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="blog-detail.html">Single 1</a>
                            </li>
                            <li><a href="blog-detail-2.html">Single 2</a>
                            </li>
                            <li><a href="blog-detail-3.html">Single 3</a>
                            </li>
                            <li><a href="blog-detail-4.html">Single 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
