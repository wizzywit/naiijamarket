<div>
    {{-- Do your work, then step back. --}}
    <div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        <div class="ps-section--shopping ps-shopping-cart">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Shopping Cart</h1>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table--shopping-cart">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($cartItems) == 0)
                                <tr>
                                    <td colspan="5"><div class="text-center"><p>No Items In Cart</p></div></td>
                                </tr>
                                @endif
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td>
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a href="{{route('naijamarket.product.show',$item['id'])}}">
                                                @if(!empty($item['associatedModel']['cover_img']))
                                                    <img src="{{asset('storage/'.$item['associatedModel']['cover_img'])}}" alt="{{$item['name']}}">
                                                @else
                                                    <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$item['name']}}">
                                                @endif
                                                </a></div>
                                            <div class="ps-product__content"><a href="{{route('naijamarket.product.show',$item['id'])}}">{{$item['name']}}</a>
                                                @php
                                                    if ($item['associatedModel']['shop_id']) {
                                                        $shop = \App\Shop::where('id',$item['associatedModel']['shop_id'])->first();
                                                    } else {
                                                        $shop = false;
                                                    }
                                                @endphp
                                                <p>Sold By:<strong> {{$shop? strtoupper($shop->name): "NAIJAMARKET"}}</strong></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">₦{{\Cart::session(auth()->id())->get($item['id'])->price}}</td>
                                    <td>
                                        <div class="form-group--number">
                                            <button class="up" wire:click="increase({{$item['id']}})">+</button>
                                            <button class="down" wire:click="decrease({{$item['id']}})">-</button>
                                            <input class="form-control" type="text" value="{{$item['quantity']}}">
                                        </div>
                                    </td>
                                    <td>₦{{ \Cart::session(auth()->id())->get($item['id'])->getPriceSum() }}</td>
                                    <td><a href="javascript:void(0);" wire:click="remove({{$item['id']}})"><i class="icon-cross"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="ps-section__cart-actions"><a class="ps-btn" href="{{route('naijamarket.home')}}"><i class="icon-arrow-left"></i> Back to Shop</a></div>
                </div>
                <div class="ps-section__footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>Coupon Discount</figcaption>
                                <form action="{{route('cart.coupon')}}" method='get'>
                                    <div class="form-group">
                                        <input id="coupon_code" name="coupon_code" value="" class="form-control" type="text" placeholder="" required>
                                    </div>
                                    @if (count($cartItems) > 0)
                                        <div class="form-group">
                                            <button class="ps-btn ps-btn--outline">Apply</button>
                                        </div>
                                    @endif
                                </form>
                            </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--shopping-total">
                                <div class="ps-block__header">
                                    <p>Subtotal <span> ₦{{\Cart::session(auth()->id())->getSubTotal()}}</span></p>
                                </div>
                                <div class="ps-block__content">
                                    <ul class="ps-block__product">
                                        @foreach ($cartItems as $item)
                                        <li><span class="ps-block__shop">{{$shop? strtoupper($shop->name): "NAIJAMARKET"}} Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="{{route('naijamarket.product.show',$item['id'])}}"> {{$item['name']}} ×{{\Cart::session(auth()->id())->get($item['id'])->quantity}}</a></span></li>
                                        @endforeach
                                    </ul>
                                    <h3>Total <span>₦{{\Cart::session(auth()->id())->getTotal()}}</span></h3>
                                </div>
                            </div>
                            @if (count($cartItems) > 0)
                                <a class="ps-btn ps-btn--fullwidth" href="{{route('naijamarket.cart.checkout')}}">Proceed to checkout</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@include('layouts.front.newsletter')
</div>
