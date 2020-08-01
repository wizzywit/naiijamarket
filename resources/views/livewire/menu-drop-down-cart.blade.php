<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if (count($cartItems) == 0)
    <div class="ps-cart__items">
        <div class="ps-product--cart-mobile">
            <div class="ps-product__content"><p>No Items in Cart</p>
            </div>
        </div>
    </div>
    @else
    <div class="ps-cart__items">
        @foreach ($cartItems as $item)
            <div class="ps-product--cart-mobile">
                <div class="ps-product__thumbnail"><a href="#"><img src="{{ asset('front_assets/img/products/clothing/7.jpg') }}" alt=""></a></div>
                <div class="ps-product__content"><a class="ps-product__remove" href="javascript:void(0);" wire:click="remove({{$item['id']}})" ><i class="icon-cross"></i></a><a href="product-default.html">{{$item['name']}}</a>
                    <p><strong>Sold by:</strong> YOUNG SHOP</p><small>{{\Cart::session(auth()->id())->get($item['id'])->quantity}} x ${{\Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}</small>
                </div>
            </div>
        @endforeach
    </div>
    <div class="ps-cart__footer">
        <h3>Sub Total:<strong>{{\Cart::session(auth()->id())->getSubTotal()}}</strong></h3>
        <h3>Total:<strong>{{\Cart::session(auth()->id())->getTotal()}}</strong></h3>
        <figure><a class="ps-btn" href="{{route('naijamarket.cart.index')}}">View Cart</a><a class="ps-btn" href="{{route('naijamarket.cart.checkout')}}">Checkout</a></figure>
    </div>
    @endif


</div>
