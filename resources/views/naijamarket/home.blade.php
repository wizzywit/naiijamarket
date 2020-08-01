@extends('layouts.front.master')

@push('css')

@endpush

@section('content')
<div id="homepage-3">
    <div class="ps-home-banner">
        <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
            <div class="ps-banner--market-1" data-background="{{ asset('front_assets/img/slider/home-3/home-banner/1.jpg') }}"><img src="{{ asset('front_assets/img/slider/home-3/home-banner/1.jpg') }}" alt="">
                <div class="ps-banner__content">
                    <h5>Mega Sale Nov 2019</h5>
                    <h3>Double Combo With <br> The Body Shop</h3>
                    <p>Sale up to <strong>50% Off </strong></p><a class="ps-btn" href="#">Shop Now</a>
                </div>
            </div>
            <div class="ps-banner--market-1" data-background="{{ asset('front_assets/img/slider/home-3/home-banner/2.jpg') }}"><img src="{{ asset('front_assets/img/slider/home-3/home-banner/2.jpg') }}" alt="">
                <div class="ps-banner__content">
                    <h5>Mega Sale Nov 2017</h5>
                    <h3>IKEA Minimalist <br> Otoman</h3>
                    <p>Discount <strong>50% Off </strong></p><a class="ps-btn" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-site-features">
        <div class="container">
            <div class="ps-block--site-features ps-block--site-features-2">
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
            </div>
        </div>
    </div>
    <div class="ps-promotions">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/promotions/home-3-1.jpg') }}" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/promotions/home-3-2.jpg') }}" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="{{ asset('front_assets/img/promotions/home-3-3.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-deal-of-day">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="ps-block--countdown-deal">
                    <div class="ps-block__left">
                        <h3>Deal of the day</h3>
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
                </div><a href="{{route('products.search')}}">View all</a>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    @foreach ($allProducts as $key => $product)
                        <livewire:cart-menu-update :product="$product"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--gray">
        <div class="container">
            @foreach ($categories as $category)
            <div class="ps-block--products-of-category">
                <div class="ps-block__categories">
                    <h3>{{$category->name}}</h3>
                    <ul>
                    @php
                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                    @endphp
                    @if($children->isNotEmpty())
                        @foreach ($children as $child)
                            @php
                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                            @endphp
                            <li><a href="{{route('products.search', ['category_id' => $child->id])}}">{{$child->name}}</a></li>
                                @if($grandChild->isNotEmpty())
                                    @foreach ($grandChild as $c)
                                        <li><a href="{{route('products.search', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                    @endforeach
                                @endif
                        @endforeach
                    @endif
                    </ul><a class="ps-block__more-link" href="{{route('products.search', ['category_id' => $category->id])}}">View All</a>
                </div>
                <div class="ps-block__slider">
                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off"><a href="#"><img src="{{ asset('storage/default/default_category.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('storage/default/default_category.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('storage/default/default_category.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('storage/default/default_category.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('storage/default/default_category.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('storage/default/default_category2.jpg') }}" alt=""></a></div>
                </div>
                <div class="ps-block__product-box">
                    @php
                        $category = \App\Category::find($category->id);
                        $products = $category->allProducts()->take(6);
                    @endphp
                    @foreach ($products as $product)
                    <div class="ps-product ps-product--simple">
                        <div class="ps-product__thumbnail"><a href="{{route('naijamarket.product.show',$product->id)}}">
                            @if(!empty($product->cover_img))
                                <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                            @else
                                <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
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
                        <div class="ps-product__container">
                            <div class="ps-product__content" data-mh="clothing"><a class="ps-product__title" href="{{route('naijamarket.product.show',$product->id)}}   ">{{$product->name}}</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">₦{{$product->price}} <del>₦670.00 </del></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('layouts.front.newsletter')
</div>
@endsection

@push('js')

@endpush





















