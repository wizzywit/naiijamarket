<div>
    {{-- Do your work, then step back. --}}

        <div class="ps-product ps-product--inner">
            <div class="ps-product__thumbnail"><a href="{{route('naijamarket.product.show',$product->id)}}">
                @if(!empty($product->cover_img))
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                @else
                    <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
                @endif
                </a>
                <div class="ps-product__badge">-16%</div>
                <ul class="ps-product__actions">
                    <li><a href="javascript:void();" wire:click="addToCart({{$product->id}})" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                </ul>
            </div>
            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Vendor: {{$product->shop? $product->shop->name: "NAIJAMARKET"}}</a>
                <div class="ps-product__content"><a class="ps-product__title" href="{{route('naijamarket.product.show',$product->id)}}">{{$product->name}}</a>
                    <div class="ps-product__rating">
                        <select class="ps-rating" data-read-only="true">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                        </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">₦{{$product->price}} <del >₦670.00 </del></p>
                    <div class="ps-product__progress-bar ps-progress" data-value="93">
                        <div class="ps-progress__value"><span></span></div>
                        <p>Sold:28</p>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
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
                    <p class="ps-product__price">$101.99</p>
                    <div class="ps-product__progress-bar ps-progress" data-value="65">
                        <div class="ps-progress__value"><span></span></div>
                        <p>Sold:92</p>
                    </div>
                </div>
            </div>
        </div> --}}

</div>
