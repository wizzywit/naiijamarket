<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
use Illuminate\Support\Facades\Auth;



class MenuDropDownCart extends Component
{

    public $cartItems = [];


    protected $listeners = ['cartUpdated' => 'onCartUpdate','AddedToCart' => 'updateCartTotal'];


    public function mount()
    {
        
        if(Auth::check()){
            $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
        } else {
            $this->cartItems = [];
        }
    }

    public function onCartUpdate()
    {

        // $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
        $this->mount();


    }

    public function updateCartTotal()
    {
        $this->mount();
    }

    public function remove(Product $product, int $id)
    {
        $product = $product->where('id',$id)->first();
        if(Auth::check()){
            \Cart::session(auth()->id())->remove($id);
            $this->mount();
            $this->emit('ItemRemoved', $product->name);
        } else {
            return redirect()->to('/login');
        }
    }

    public function render()
    {
        return view('livewire.menu-drop-down-cart');
    }
}
