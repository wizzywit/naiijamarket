@extends('layouts.front.master')

@push('css')

@endpush
@section('content')

<main class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="user-information.html">Account</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <section class="ps-section--account ps-checkout">
        <div class="container">
            <div class="ps-section__header">
                <h3>Checkout Information</h3>
            </div>
            <div class="ps-section__content">
                <form class="ps-form--checkout" action="{{route('orders.store')}}" method="post">
                    @csrf
                    <div class="ps-form__content">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__billing-info">
                                    <h3 class="ps-form__heading">Billing Details</h3>
                                    <div class="form-group">
                                        <label>Full Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text" name="fullname">
                                            @error('fullname')
                                                <span style="color: red">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text" name="address">
                                            @error('address')
                                                <span style="color: red">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-20">
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>City<sup>*</sup></label>
                                                <input class="form-control" type="text" placeholder="" name="city">
                                                @error('city')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>State<sup>*</sup></label>
                                                <input class="form-control" type="text" placeholder="" name="state">
                                                @error('state')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-20">
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>Postal Code<sup>*</sup></label>
                                                <input class="form-control" type="text" placeholder="" name="zipcode">
                                                @error('zipcode')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>Phone<sup>*</sup>
                                                </label>
                                                <input class="form-control" type="phone" placeholder="" name="phone">
                                                @error('phone')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="boxchecked" name="different_ship_address" {{old('different_ship_address')? 'checked': null}}>
                                            <label for="boxchecked">Ship to a different address?</label>
                                        </div>
                                    </div>
            

                                    <h3 class="ps-form__heading">Payment Option</h3>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                                             Cash on delivery
                                        </label>
                                    </div>
                                    <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                                                 Paypal
                                            </label>
                                    </div>
                                    @error('payment_method')
                                        <span style="color: red">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <br />
                                    <h3 class="mt-40"> Addition information</h3>
                                    <div class="form-group">
                                        <label>Order Notes</label>
                                        <div class="form-group__content">
                                            <textarea class="form-control" rows="7" name="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="ps-form__billing-info" id="hidden" style="display: none">
                                    <h3 class="ps-form__heading">Shipping Address</h3>
                                    <div class="form-group">
                                        <label>Full Name<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text" name="shipping_fullname">
                                            @error('shipping_fullname')
                                                <span style="color: red">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <input class="form-control" type="text" name="shipping_address">
                                            @error('shipping_address')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-20">
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>City<sup>*</sup></label>
                                                <input class="form-control" type="text" placeholder="" name="shipping_city">
                                                @error('shipping_city')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>State<sup>*</sup></label>
                                                <input class="form-control" type="text" placeholder="" name="shipping_state">
                                                @error('shipping_state')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-20">
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>Postal Code<sup>*</sup></label>
                                                <input class="form-control" type="text" placeholder="" name="shipping_zipcode">
                                                @error('shipping_zipcode')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group__content">
                                                <label>Phone<sup>*</sup>
                                                </label>
                                                <input class="form-control" type="phone" placeholder="" name="shipping_phone">
                                                @error('shipping_phone')
                                                    <span style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><button type="submit" class="ps-btn ps-btn--fullwidth" >Place Order</button>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-block--checkout-order">
                                    <div class="ps-block__content">
                                        <figure>
                                            <figcaption><strong>Product</strong><strong>Total</strong></figcaption>
                                        </figure>
                                        <figure class="ps-block__items">
                                            @foreach ($cartItems as $item)
                                                <a href="{{route('naijamarket.product.show',$item['id'])}}"><strong>{{$item['name']}}</strong><span>x{{\Cart::session(auth()->id())->get($item['id'])->quantity}}</span><small>₦ {{\Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}</small></a>
                                            @endforeach
                                        </figure>
                                        <figure>
                                            <figcaption><strong>Subtotal</strong><strong>₦{{\Cart::session(auth()->id())->getSubTotal()}}</strong></figcaption>
                                            <figcaption><strong>Total</strong><strong>₦{{\Cart::session(auth()->id())->getTotal()}}</strong></figcaption>
                                        </figure>
                                        <figure class="ps-block__shipping">
                                            <h3>Shipping</h3>
                                            <p>Free Shipping</p>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('layouts.front.newsletter')
</main>

@endsection

@push('js')
<script>
$(document).ready(function(){
    if ($("#boxchecked").prop("checked")){
        $("#hidden").show();
    }else{
        $("#hidden").hide();
    }


        $("#boxchecked").click(function (){
            if ($("#boxchecked").prop("checked")){
                $("#hidden").show();
            }else{
                $("#hidden").hide();
            }              
        });
    });
</script>

@endpush
