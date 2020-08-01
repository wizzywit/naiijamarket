<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;


class ShoppingCartPage extends Component
{

    public $cartItems = [];
    public $quantity;
    public $itemID;


    protected $listeners = ['cartUpdated' => 'onCartUpdate','updateCart' => 'updateCart'];


    public function mount()
    {
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
    }

    public function increase(int $itemID)
    {
        # code...
        $product = \Cart::session(auth()->id())->getContent($itemID)->toArray();
        $this->quantity = $product[$itemID]['quantity']+1;
        $this->itemID = $itemID;
        $this->emit('updateCart');
    }

    public function decrease(int $itemID)
    {
        # code...
        $product = \Cart::session(auth()->id())->getContent($itemID)->toArray();
        if($product[$itemID]['quantity'] > 1) {
            $this->quantity = $product[$itemID]['quantity']-1;
            $this->itemID = $itemID;
            $this->emit('updateCart');
        }
    }

    public function remove(Product $product, int $id)
    {
        $product = $product->where('id',$id)->first();
        \Cart::session(auth()->id())->remove($id);
        $this->mount();
        $this->emit('ItemRemoved', $product->name);
    }

    public function onCartUpdate()
    {

        // $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
        $this->mount();


    }

    public function updateCart()
    {

        \Cart::session(auth()->id())->update($this->itemID, [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ]
        ]);
        $product = \Cart::session(auth()->id())->getContent($this->itemID)->toArray();
        // dd($product[$this->itemID]['name']);
        $this->emit('UpdatedCartNow', $product[$this->itemID]['name']);
        $this->emit('cartUpdated');
    }

    public function render()
    {
        // dd($this->cartItems);
        return view('livewire.shopping-cart-page');
    }
}
