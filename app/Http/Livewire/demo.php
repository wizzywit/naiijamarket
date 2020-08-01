@extends('layouts.front.master')

@push('css')

@endpush

@section('content')
<div id="homepage-1">
    <div class="ps-home-banner ps-home-banner--1">
        <div class="ps-container">
            <div class="ps-section__left">
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-banner"><a href="#"><img src="{{ asset('front_assets/img/slider/home-1/slide-1.jpg') }}" alt=""></a></div>
                    <div class="ps-banner"><a href="#"><img src="{{ asset('front_assets/img/slider/home-1/slide-2.jpg') }}" alt=""></a></div>
                    <div class="ps-banner"><a href="#"><img src="{{ asset('front_assets/img/slider/home-1/slide-3.jpg') }}" alt=""></a></div>
                </div>
            </div>
            <div class="ps-section__right"><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/slider/home-1/promotion-1.jpg') }}" alt=""></a><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/slider/home-1/promotion-2.jpg') }}" alt=""></a></div>
        </div>
    </div>
    <div class="ps-site-features">
        <div class="ps-container">
            <div class="ps-block--site-features">
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-rocket"></i></div>
                    <div class="ps-block__right">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $99</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-sync"></i></div>
                    <div class="ps-block__right">
                        <h4>90 Days Return</h4>
                        <p>If goods have problems</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                    <div class="ps-block__right">
                        <h4>Secure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                    <div class="ps-block__right">
                        <h4>24/7 Support</h4>
                        <p>Dedicated support</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-gift"></i></div>
                    <div class="ps-block__right">
                        <h4>Gift Service</h4>
                        <p>Support gift service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-deal-of-day">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="ps-block--countdown-deal">
                    <div class="ps-block__left">
                        <h3>Deals of the day</h3>
                    </div>
                    <div class="ps-block__right">
                        <figure>
                            <figcaption>End in:</figcaption>
                            <ul class="ps-countdown" data-time="July 21, 2020 15:37:25">
                                <li><span class="days"></span></li>
                                <li><span class="hours"></span></li>
                                <li><span class="minutes"></span></li>
                                <li><span class="seconds"></span></li>
                            </ul>
                        </figure>
                    </div>
                </div><a href="#">View all</a>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach ($allProducts as $key => $product)
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html">
                            @if(!empty($product->cover_img))
                                <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                            @else
                                <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
                            @endif
                            </a>
                            <div class="ps-product__badge">-<?php $value = 17; echo $value ?>%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">₦{{$product->price}} <del>₦670.00 </del><small>18% off</small></p>
                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{$product->name}}</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="46">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:58</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/home/2.jpg') }}" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$101.99<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="48">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:1</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="ps-home-ads">
        <div class="ps-container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/collection/home-1/1.jpg') }}" alt="Naijamarket"></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/collection/home-1/2.jpg') }}" alt="Naijamarket"></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/collection/home-1/3.jpg') }}" alt="Naijamarket"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-top-categories">
        <div class="ps-container">
            <h3>Top categories</h3>
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('products.index', ['category_id' => $category->id])}}"></a><img src="{{ asset('storage/default/default_category.jpg') }}" alt="Category">
                        <p>{{$category->name}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @foreach ($categories as $category)
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>{{$category->name}}</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    @php
                        $category = \App\Category::find($category->id);
                        $products = $category->allProducts();
                    @endphp
                    @foreach ($products as $item)
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html">
                            @if(!empty($item->cover_img))
                                <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$item->name}}">
                            @else
                                <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$item->name}}">
                            @endif
                            </a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{$item->name}}</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">₦{{$item->price}} <del>₦670.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                <p class="ps-product__price sale">₦{{$item->price}} <del>₦670.00 </del></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="ps-home-ads">
        <div class="ps-container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/collection/home-1/ad-1.jpg') }}" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/collection/home-1/ad-2.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product-list ps-new-arrivals">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Hot New Arrivals</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    @foreach ($newproducts as $key => $product)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                @if(!empty($product->cover_img))
                                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                                @else
                                    <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
                                @endif
                            </a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{$product->name}}</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price">₦{{$product->price}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/arrivals/1.jpg') }}" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                <p class="ps-product__price">$1120.50</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="ps-newsletter">
        <div class="ps-container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush





















