@extends('layouts.front.master')

@push('css')
    <style>
        .bg-gray {
            background-color: grey;
        }
    </style>

@endpush

@section('content')
<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="shop-default.html">Consumer Electrics</a></li>
            <li><a href="shop-default.html">Refrigerators</a></li>
            <li>Marshall Kilburn Portable Wireless Speaker</li>
        </ul>
    </div>
</div>
<div class="ps-page--product">
    <div class="ps-container">
        <div class="ps-page__container">
            <div class="ps-page__left">
                <div class="ps-product--detail ps-product--fullwidth">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="true">
                            <figure>
                                <div class="ps-wrapper">
                                    <div class="ps-product__gallery" data-arrow="true">
                                        <div class="item"><a href="{{ productImage($product->cover_img) }}"><img src="{{ productImage($product->cover_img) }}" alt="{{ $product->name }} "></a></div>
                                        @if ($product->images)
                                            @foreach (json_decode($product->images, true) as $image)
                                                <div class="item"><a href="{{ productImage($image) }}"><img src="{{ productImage($image) }}" alt="{{ $product->name }}"></a></div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </figure>
                            <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                                <div class="item"><img src="{{ productImage($product->cover_img) }}" alt="{{ $product->name }}"></div>
                                @if ($product->images)
                                    @foreach (json_decode($product->images, true) as $image)
                                        <div class="item"><img src="{{ productImage($image)}}" alt="{{ $product->name }}"></div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>{{$product->name}}</h1>
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
                            <h4 class="ps-product__price">₦{{$product->price}}</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a href="shop-default.html"><strong> {{$product->shop? $product->shop->name: "NaijaMarket Shop"}}</strong></a></p>
                                {!!html_entity_decode($product->short_desc)!!}
                            </div>
                            <div class="ps-product__variations">
                                <figure>
                                    <figcaption>Color</figcaption>
                                    <div class="ps-variant ps-variant--color color--1"><span class="ps-variant__tooltip">Black</span></div>
                                    <div class="ps-variant ps-variant--color color--2"><span class="ps-variant__tooltip"> Gray</span></div>
                                </figure>
                            </div>
                            <livewire:product-page-add-cart :product="$product"/>
                            <div class="ps-product__specification"><a class="report" href="#">Report Abuse</a>
                                <p><strong>SKU:</strong> SF1133569600-1</p>
                                <p class="categories"><strong> Categories:</strong><a href="#">Consumer Electronics</a>,<a href="#"> Refrigerator</a>,<a href="#">Babies & Moms</a></p>
                                <p class="tags"><strong> Tags</strong><a href="#">sofa</a>,<a href="#">technologies</a>,<a href="#">wireless</a></p>
                            </div>
                            <div class="ps-product__sharing"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><a class="google" href="#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                    <div class="ps-product__content ps-tab-root">
                        <ul class="ps-tab-list">
                            <li class="active"><a href="#tab-1">Description</a></li>
                            <li><a href="#tab-2">Specification</a></li>
                            <li><a href="#tab-3">Vendor</a></li>
                            <li><a href="#tab-4">Reviews (1)</a></li>
                            <li><a href="#tab-5">Questions and Answers</a></li>
                            <li><a href="#tab-6">More Offers</a></li>
                        </ul>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-document">
                                    {!!html_entity_decode($product->description)!!}
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-2">
                                <div class="table-responsive">
                                    <table class="table table-bordered ps-table ps-table--specification">
                                        <tbody>
                                            @if($product->attributes))
                                            @foreach ($product->attributes as $key => $value)
                                            <tr>
                                                <td>{{$key}}</td>
                                                <td>{{$value}}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-3">
                                <h4>{{$product->shop? $product->shop->name: "NaijaMarket Shop"}}</h4>
                                <p>{{$product->shop? $product->shop->description: "NaijaMarket Online Market"}}</p><a href="{{$product->shop? route('naijamarket.shop.product',$product->shop->id): route('products.index')}}">More Products from {{$product->shop? $product->shop->name: "NaijaMarket Shop"}}</a>
                            </div>
                            <div class="ps-tab" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
                                        <div class="ps-block--average-rating">
                                            <div class="ps-block__header">
                                                <h3>4.00</h3>
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>1 Review</span>
                                            </div>
                                            <div class="ps-block__star"><span>5 Star</span>
                                                <div class="ps-progress" data-value="100"><span></span></div><span>100%</span>
                                            </div>
                                            <div class="ps-block__star"><span>4 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                            </div>
                                            <div class="ps-block__star"><span>3 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                            </div>
                                            <div class="ps-block__star"><span>2 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                            </div>
                                            <div class="ps-block__star"><span>1 Star</span>
                                                <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 ">
                                        <form class="ps-form--review" action="index.html" method="get">
                                            <h4>Submit Your Review</h4>
                                            <p>Your email address will not be published. Required fields are marked<sup>*</sup></p>
                                            <div class="form-group form-group__rating">
                                                <label>Your rating of this product</label>
                                                <select class="ps-rating" data-read-only="false">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="6" placeholder="Write your review here"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                                                    <div class="form-group">
                                                        <input class="form-control" type="email" placeholder="Your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group submit">
                                                <button class="ps-btn">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-5">
                                <div class="ps-block--questions-answers">
                                    <h3>Questions and Answers</h3>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Have a question? Search for answer?">
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tab active" id="tab-6">
                                <p>Sorry no more offers available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-page__right">
                <aside class="widget widget_product widget_features">
                    <p><i class="icon-network"></i> Shipping worldwide</p>
                    <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
                    <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
                    <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
                </aside>
                <aside class="widget widget_sell-on-site">
                    <p><i class="icon-store"></i> Sell on Martfury?<a href="#"> Register Now !</a></p>
                </aside>
                <aside class="widget widget_ads"><a href="#"><img src="{{ asset('front_assets/img/ads/product-ads.png') }}" alt=""></a></aside>
                <aside class="widget widget_same-brand">
                    <h3>Same Brand</h3>
                    <div class="widget__content">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/5.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-37%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                    <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/6.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-5%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="ps-section--default ps-customer-bought">
            <div class="ps-section__header">
                <h3>Customers who bought this item also bought</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/4.jpg') }}" alt=""></a>
                                <div class="ps-product__badge hot">hot</div>
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
                                    <p class="ps-product__price">$55.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                    <p class="ps-product__price">$55.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/5.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-37%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                    <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/6.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-5%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/7.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/8.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
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
                                    <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                    <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/9.jpg') }}" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <p class="ps-product__price">$35.89</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                    <p class="ps-product__price">$35.89</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section--default">
            <div class="ps-section__header">
                <h3>Related products</h3>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/11.jpg') }}" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$13.43</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                <p class="ps-product__price">$13.43</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/12.jpg') }}" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$75.44</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                <p class="ps-product__price">$75.44</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/13.jpg') }}" alt=""></a>
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
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/14.jpg') }}" alt=""></a>
                            <div class="ps-product__badge">-7%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
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
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/15.jpg') }}" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$332.38</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                <p class="ps-product__price sale">$332.38</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/16.jpg') }}" alt=""></a>
                            <div class="ps-product__badge">-7%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                                <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/17.jpg') }}" alt=""></a>
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
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/18.jpg') }}" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$233.28</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <p class="ps-product__price">$233.28</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('front_assets/img/products/shop/19.jpg') }}" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$233.28</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <p class="ps-product__price">$233.28</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.front.newsletter')
@endsection

@push('js')
    <script>
        // $('.up').click(function() {
        //     var count = $('.count').val();
        //     count = parseInt(count);
        //     count = count + 1;
        //     $('.count').val(count);
        // })
        // $('.down').click(function() {
        //     var count = $('.count').val();
        //     count = parseInt(count);
        //     if(count == 1){
        //         return;
        //     } else {
        //         count = count - 1;
        //         $('.count').val(count);
        //     }

        // })
    </script>

@endpush

