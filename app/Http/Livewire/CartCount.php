<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCount extends Component
{
    public $cartTotal = 0;


    //listens for emited cart added
    protected $listeners = [
        'AddedToCart' => 'updateCartTotal',
        'ItemRemoved' => 'updateCartTotal'
    ];

    public function mount() {
        $this->cartTotal = \Cart::session(auth()->id())->getContent()->count();
    }
    public function render()
    {
        return view('livewire.cart-count');
    }


    //method fired when card added
    public function updateCartTotal()
    {
        $this->cartTotal = \Cart::session(auth()->id())->getContent()->count();
    }
}
