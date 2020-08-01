<div>
    {{-- The whole world belongs to you --}}
    <div class="ps-product__shopping">
        <figure>
            <figcaption>Quantity</figcaption>
            <div class="form-group--number">
                <button class="up" wire:click="increase"><i class="fa fa-plus"></i></button>
                <button class="down" wire:click="decrease"><i class="fa fa-minus"></i></button>
                <input id="quantity" wire:model="quantity" class="form-control count" type="text">
            </div>
        </figure><button wire:target="addToCart" wire:loading.attr="disabled" wire:loading.class="bg-gray" class="ps-btn ps-btn--black " href="javascript:void(0);" wire:click="addToCart({{$product->id}})">Add to cart</button><a class="ps-btn" href="{{route('cart.add',$product->id)}}">Buy Now</a>
        <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
    </div>
</div>
