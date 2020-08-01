<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductPageAddCart extends Component
{

    public $product = [];

    public $quantity = 1;

     //listens for emited cart added
     protected $listeners = [
        'cartUpdated' => 'updateTotalCart',
    ];

    public function mount($product)
    {
        # code...
        $this->product = $product;
    }

    public function increase()
    {
        # code...
        $this->quantity = $this->quantity+1;
    }

    public function decrease()
    {
        # code...
        if($this->quantity > 1) {
            $this->quantity = $this->quantity-1;
        }
    }

    public function addToCart(Product $product, int $product_id) {
        $product = $product->where('id',$product_id)->first();
        // dd($this->quantity);
        // dd($product);
        if(Auth::check()){
            \Cart::session(auth()->id())->add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $this->quantity,
                'attributes' => array(),
                'associatedModel' => $product
            ));

            $this->emit('AddedToCart', $product->name);
        } else {
            $this->emit('Unauthorized');
        }




    }

    public function updateCart()
    {

        \Cart::session(auth()->id())->update($this->product['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ]
        ]);

        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.product-page-add-cart');
    }
}
