<footer class="ps-footer">
    <div class="container">
        <div class="ps-footer__widgets">
            <aside class="widget widget_footer widget_contact-us">
                <h4 class="widget-title">Contact us</h4>
                <div class="widget_content">
                    <p>Call us 24/7</p>
                    <h3>070 5080 7509</h3>
                    <p>502 New Design Str, Abuja, Nigeria <br><a href="mailto:contact@martfury.co">info@naiijamarket.com</a></p>
                    <ul class="ps-list--social">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </aside>
            <aside class="widget widget_footer">
                <h4 class="widget-title">Quick links</h4>
                <ul class="ps-list--link">
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Term & Condition</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Return</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                </ul>
            </aside>
            <aside class="widget widget_footer">
                <h4 class="widget-title">Company</h4>
                <ul class="ps-list--link">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="#">Affilate</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </aside>
            <aside class="widget widget_footer">
                <h4 class="widget-title">Bussiness</h4>
                <ul class="ps-list--link">
                    <li><a href="#">Our Press</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="my-account.html">My account</a></li>
                    <li><a href="shop-default.html">Shop</a></li>
                </ul>
            </aside>
        </div>
        <div class="ps-footer__links">
            @php
                $categories = \TCG\Voyager\Models\Category::whereNull('parent_id')->get();
            @endphp

            @foreach ($categories as $category)
            <p><strong>{{$category->name}}:</strong>
                @php
                    $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                @endphp
                @if($children->isNotEmpty())
                    @foreach ($children as $child)
                        @php
                            $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                        @endphp
                        <a href="{{route('products.search', ['category_id' => $child->id])}}">{{$child->name}}</a>
                            @if($grandChild->isNotEmpty())
                                @foreach ($grandChild as $c)
                                    <a href="{{route('products.search', ['category_id' => $c->id])}}">{{$c->name}}</a>
                                @endforeach
                            @endif
                    @endforeach
                @endif
            </p>
            @endforeach     
        </div>
        <div class="ps-footer__copyright">
            <p>© 2020 NaiijaMarket. All Rights Reserved</p>
            <p><span>We Using Safe Payment For:</span><a href="#"><img style="width:50px;" src="{{ asset('front_assets/img/payment-method/1.png') }}" alt=""></a><a href="#"><img style="width:50px;" src="{{ asset('front_assets/img/payment-method/2.png') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/payment-method/3.png') }}" alt=""></a><a href="#"><img style="width:50px;" src="{{ asset('front_assets/img/payment-method/4.png') }}" alt=""></a><a href="#"><img style="width:50px;" src="{{ asset('front_assets/img/payment-method/5.png') }}" alt=""></a></p>
        </div>
    </div>
</footer>
<div id="back2top"><i class="pe-7s-angle-up"></i></div>
<div class="ps-site-overlay"></div>
<div id="loader-wrapper">
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
    <div class="ps-search__content">
        <form class="ps-form--primary-search" action="do_action" method="post">
            <input class="form-control" type="text" placeholder="Search for...">
            <button><i class="aroma-magnifying-glass"></i></button>
        </form>
    </div>
</div>
<div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
            <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                <div class="ps-product__header">
                    <div class="ps-product__thumbnail" data-vertical="false">
                        <div class="ps-product__images" data-arrow="true">
                            <div class="item"><img src="{{ asset('front_assets/img/products/detail/fullwidth/1.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('front_assets/img/products/detail/fullwidth/2.jpg') }}" alt=""></div>
                            <div class="item"><img src="{{ asset('front_assets/img/products/detail/fullwidth/3.jpg') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="ps-product__info">
                        <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                        <div class="ps-product__meta">
                            <p>Brand:<a href="shop-default.html">Sony</a></p>
                            <div class="ps-product__rating">
                                <select class="ps-rating" data-read-only="true">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select><span>(1 review)</span>
                            </div>
                        </div>
                        <h4 class="ps-product__price">$36.78 – $56.99</h4>
                        <div class="ps-product__desc">
                            <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                            <ul class="ps-list--dot">
                                <li> Unrestrained and portable active stereo speaker</li>
                                <li> Free from the confines of wires and chords</li>
                                <li> 20 hours of portable capabilities</li>
                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                            </ul>
                        </div>
                        <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                            <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
