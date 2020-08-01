<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
        <div class="ps-product">
            <div class="ps-product__thumbnail"><a href="product-default.html">
                @if(!empty($product->cover_img))
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="{{$product->name}}">
                @else
                    <img src="{{ asset('storage/default/default_product.jpg') }}" alt="{{$product->name}}">
                @endif
                </a>
                <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                </ul>
            </div>
            <div class="ps-product__container"><a class="ps-product__vendor" href="#">ROBERT’S STORE</a>
                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                    <p class="ps-product__price">$1310.00</p>
                </div>
                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                    <p class="ps-product__price">$1310.00</p>
                </div>
            </div>
        </div>
    </div>
</div>
