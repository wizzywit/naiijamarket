@extends('layouts.front.master')

@push('css')
@endpush

@section('content')

<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Shop</li>
        </ul>
    </div>
</div>
<div class="ps-page--shop">
    <div class="ps-container">
        <div class="ps-shop-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="#"><img src="{{ asset('front_assets/img/slider/shop-default/1.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/slider/shop-default/2.jpg') }}" alt=""></a></div>
        </div>
        <div class="ps-shop-brand"><a href="#"><img src="{{ asset('front_assets/img/brand/1.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/2.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/3.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/4.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/5.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/6.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/7.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('front_assets/img/brand/8.jpg') }}" alt=""></a></div>
        <div class="ps-shop-categories">
            <div class="row align-content-lg-stretch">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/1.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Clothing &amp; Apparel</h4>
                            <ul>
                                <li><a href="shop-default.html">Accessories</a></li>
                                <li><a href="shop-default.html">Bags</a></li>
                                <li><a href="shop-default.html">Kid's Fashion</a></li>
                                <li><a href="shop-default.html">Mens</a></li>
                                <li><a href="shop-default.html">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/2.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Garden &amp; Kitchen</h4>
                            <ul>
                                <li><a href="shop-default.html">Cookware</a></li>
                                <li><a href="shop-default.html">Decoration</a></li>
                                <li><a href="shop-default.html">Furniture</a></li>
                                <li><a href="shop-default.html">Garden Tools</a></li>
                                <li><a href="shop-default.html">Home Improvement</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/3.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Consumer Electrics</h4>
                            <ul>
                                <li><a href="shop-default.html">Air Conditioners</a></li>
                                <li><a href="shop-default.html">Audios &amp; Theaters</a></li>
                                <li><a href="shop-default.html">Car Electronics</a></li>
                                <li><a href="shop-default.html">Office Electronics</a></li>
                                <li><a href="shop-default.html">Refrigerations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/4.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Health &amp; Beauty</h4>
                            <ul>
                                <li><a href="shop-default.html">Equipments</a></li>
                                <li><a href="shop-default.html">Hair Care</a></li>
                                <li><a href="shop-default.html">Perfumer</a></li>
                                <li><a href="shop-default.html">Skin Care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/5.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Computers &amp; Technologies</h4>
                            <ul>
                                <li><a href="shop-default.html">Desktop PC</a></li>
                                <li><a href="shop-default.html">Laptop</a></li>
                                <li><a href="shop-default.html">Smartphones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/6.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Jewelry &amp; Watches</h4>
                            <ul>
                                <li><a href="shop-default.html">Gemstones Jewelry</a></li>
                                <li><a href="shop-default.html">Men's Watches</a></li>
                                <li><a href="shop-default.html">Women's Watches</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/7.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Phone &amp; Accessories</h4>
                            <ul>
                                <li><a href="shop-default.html">Iphone 8</a></li>
                                <li><a href="shop-default.html">Iphone X</a></li>
                                <li><a href="shop-default.html">Samsung Note 8</a></li>
                                <li><a href="shop-default.html">Samsung S8</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                    <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img src="{{ asset('front_assets/img/categories/shop/8.jpg') }}" alt=""></div>
                        <div class="ps-block__content">
                            <h4>Sport &amp; Outdoor</h4>
                            <ul>
                                <li><a href="shop-default.html">Freezer Burn</a></li>
                                <li><a href="shop-default.html">Frigde Cooler</a></li>
                                <li><a href="shop-default.html">Wine Cabinets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-layout--shop">
            <div class="ps-layout__left">
                <aside class="widget widget_shop">
                    <h4 class="widget-title">Categories</h4>
                    <form class="ps-form--widget-search" action="{{route('products.search')}}" method="get">
                        <select class="form-control" name="location_id" id="location" onchange="this.form.submit()">
                            @php
                                $locations = \App\States::all();
                            @endphp
                            <option value="" selected>All</option>
                            @foreach ($locations as $location)
                                <option value="{{$location->id}}" @if (request()->has('location_id') && request()->location_id == $location->id)
                                    selected
                                @else

                                @endif>{{$location->name}}</option>
                            @endforeach
                        </select>
                    </form>
                    <ul class="ps-list--categories">
                        @foreach ($categories as $category)
                        <li class="current-menu-item menu-item-has-children">
                            @if (request()->filled('location_id'))
                            <a href="{{route('products.search', ['location_id'=>request()->location_id,'category_id' => $category->id])}}">{{$category->name}}</a>
                            @else
                            <a href="{{route('products.search', ['category_id' => $category->id])}}">{{$category->name}}</a>
                            @endif
                            @php
                                $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                            @endphp
                            @if($children->isNotEmpty())
                            <span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                @foreach ($children as $child)
                                    @php
                                        $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                    @endphp
                                    <li class="current-menu-item ">
                                        @if (request()->filled('location_id'))
                                        <a href="{{route('products.search', ['location_id'=>request()->location_id,'category_id' => $child->id])}}">{{$child->name}}</a>
                                        @else
                                        <a href="{{route('products.search', ['category_id' => $child->id])}}">{{$child->name}}</a>
                                        @endif
                                    </li>
                                    @if($grandChild->isNotEmpty())
                                        @foreach ($grandChild as $c)
                                        <li class="current-menu-item ">
                                            @if (request()->filled('location_id'))
                                            <a href="{{route('products.search', ['location_id'=>request()->location_id,'category_id' => $c->id])}}">{{$c->name}}</a>
                                            @else
                                            <a href="{{route('products.search', ['category_id' => $c->id])}}">{{$c->name}}</a>
                                            @endif
                                        </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach


                        </li>
                    </ul>
                </aside>
                <aside class="widget widget_shop">
                    <h4 class="widget-title">BY BRANDS</h4>
                    <form class="ps-form--widget-search" action="do_action" method="get">
                        <input class="form-control" type="text" placeholder="">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                    <figure class="ps-custom-scrollbar" data-height="250">
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-1" name="brand">
                            <label for="brand-1">Adidas (3)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-2" name="brand">
                            <label for="brand-2">Amcrest (1)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-3" name="brand">
                            <label for="brand-3">Apple (2)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-4" name="brand">
                            <label for="brand-4">Asus (19)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-5" name="brand">
                            <label for="brand-5">Baxtex (20)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-6" name="brand">
                            <label for="brand-6">Adidas (11)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-7" name="brand">
                            <label for="brand-7">Casio (9)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-8" name="brand">
                            <label for="brand-8">Electrolux (0)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-9" name="brand">
                            <label for="brand-9">Gallaxy (0)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-10" name="brand">
                            <label for="brand-10">Samsung (0)</label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="brand-11" name="brand">
                            <label for="brand-11">Sony (0)</label>
                        </div>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div id="nonlinear"></div>
                        <p class="ps-slider__meta">Price:<span class="ps-slider__value">$<span class="ps-slider__min"></span></span>-<span class="ps-slider__value">$<span class="ps-slider__max"></span></span></p>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-1" name="review">
                            <label for="review-1"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i></span><small>(13)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-2" name="review">
                            <label for="review-2"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i></span><small>(13)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-3" name="review">
                            <label for="review-3"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-4" name="review">
                            <label for="review-4"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-5" name="review">
                            <label for="review-5"><span><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(1)</small></label>
                        </div>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Color</h4>
                        <div class="ps-checkbox ps-checkbox--color color-1 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-1" name="size">
                            <label for="color-1"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-2 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-2" name="size">
                            <label for="color-2"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-3 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-3" name="size">
                            <label for="color-3"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-4 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-4" name="size">
                            <label for="color-4"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-5 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-5" name="size">
                            <label for="color-5"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-6 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-6" name="size">
                            <label for="color-6"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-7 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-7" name="size">
                            <label for="color-7"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-8 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-8" name="size">
                            <label for="color-8"></label>
                        </div>
                    </figure>
                    <figure class="sizes">
                        <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                    </figure>
                </aside>
            </div>
            <div class="ps-layout__right">
                <div class="ps-block--shop-features">
                    <div class="ps-block__header">
                        <h3>Best Sale Items</h3>
                        <div class="ps-block__navigation"><a class="ps-carousel__prev" href="#recommended1"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href="#recommended1"><i class="icon-chevron-right"></i></a></div>
                    </div>
                    <div class="ps-block__content">
                        <div class="owl-slider" id="recommended1" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/1.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$22.99 - $32.99</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <p class="ps-product__price">$22.99 - $32.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/2.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-7%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                        <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-16%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$35.00 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                        <p class="ps-product__price sale">$35.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/4.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-5%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>23</span>
                                        </div>
                                        <p class="ps-product__price sale">$100.00 <del>$105.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <p class="ps-product__price sale">$100.00 <del>$105.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/5.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$125.30</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <p class="ps-product__price">$125.30</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/6.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge hot">Hot</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/best/7.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$599.00</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <p class="ps-product__price">$599.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-block--shop-features">
                    <div class="ps-block__header">
                        <h3>Recommended Items</h3>
                        <div class="ps-block__navigation"><a class="ps-carousel__prev" href="#recommended"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href="#recommended"><i class="icon-chevron-right"></i></a></div>
                    </div>
                    <div class="ps-block__content">
                        <div class="owl-slider" id="recommended" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/1.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-37%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                        <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/2.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-37%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                        <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/3.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-25%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                        <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/4.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-46%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/5.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-46%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/6.jpg') }}" alt=""></a>
                                    <div class="ps-product__badge">-28%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/recommended/7.jpg') }}" alt=""></a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$599.00</p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <p class="ps-product__price">$599.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-shopping ps-tab-root">
                    <div class="ps-shopping__header">
                        <p><strong> {{$products->total()}}</strong> Products found</p>
                        <div class="ps-shopping__actions">
                            <select class="ps-select" data-placeholder="Sort Items">
                                <option selected>Sort by latest</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                            <div class="ps-shopping__view">
                                <p>View</p>
                                <ul class="ps-tab-list">
                                    <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                    <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="tab-1">
                            <div class="ps-shopping-product">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="{{route('naijamarket.product.show',$product->id)}}">
                                                    @if(!empty($product->cover_img))
                                                        <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                                                    @else
                                                        <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
                                                    @endif
                                                    </a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="{{route('cart.add',$product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">{{$product->shop? $product->shop->name: "NAIJAMARKET"}}</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="{{route('naijamarket.product.show',$product->id)}}">{{$product->name}}</a>
                                                        <p class="ps-product__price">₦{{$product->price}}</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="{{route('naijamarket.product.show',$product->id)}}">{{$product->name}}</a>
                                                        <p class="ps-product__price">₦{{$product->price}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    {{$products->appends(['query'=>request('query'), 'location_id'=>request('location_id')])->render()}}
                                </ul>
                            </div>
                        </div>

                        <div class="ps-tab" id="tab-2">
                            <div class="ps-shopping-product">
                                @foreach($products as $product)
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="{{route('naijamarket.product.show',$product->id)}}">
                                        @if(!empty($product->cover_img))
                                            <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                                        @else
                                            <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
                                        @endif
                                        </a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="{{route('naijamarket.product.show',$product->id)}}">{{$product->name}}</a>
                                            <p class="ps-product__vendor">Sold by:<a href="#">{{$product->shop? $product->shop->name: "NAIJAMARKET"}}</a></p>
                                            <ul class="ps-product__desc">
                                                {!!html_entity_decode($product->short_desc)!!}
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">₦{{$product->price}}</p><a class="ps-btn" href="{{route('cart.add',$product->id)}}">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="ps-pagination">
                                    {{$products->appends(['query'=>request('query'), 'location_id'=>request('location_id')])->render()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="shop-filter-lastest" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action" href="#">Sort by</a><a class="list-group-item list-group-item-action" href="#">Sort by average rating</a><a class="list-group-item list-group-item-action" href="#">Sort by latest</a><a class="list-group-item list-group-item-action" href="#">Sort by price: low to high</a><a class="list-group-item list-group-item-action" href="#">Sort by price: high to low</a><a class="list-group-item list-group-item-action text-center" href="#" data-dismiss="modal"><strong>Close</strong></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.front.newsletter')
@endsection

@push('js')
@endpush
