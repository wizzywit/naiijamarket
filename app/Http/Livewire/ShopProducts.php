<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ShopProducts extends Component
{

    public $product;


    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart(Product $product, int $product_id) {
        $product = $product->where('id',$product_id)->first();
        // dd($product);
        if(Auth::check()){
            \Cart::session(auth()->id())->add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $product
            ));

            $this->emit('AddedToCart', $product->name);
        } else {
            $this->emit('Unauthorized');
        }
    }
    public function render()
    {
        return view('livewire.shop-products');
    }
}
