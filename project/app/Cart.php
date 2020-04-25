<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items;
    public $totalQty;
    public $totalPrice;
    public  function __construct($cart = null)
    {
        if($cart){
            $this->items=$cart;
            $this->totalQty=$cart->totalQty;
            $this->totalPrice=$cart->totalPrice;
        }
        else {
            $this->items = [];
            $this->totalQty=0;
            $this->totalPrice=0;
        }
    }
    public function add($product){
        $item=[
            'title'=>$product->name,
            'price'=>$product->price,
            'qty'=>0,
            'image'=>$product->image
        ];
        if($this->items){
            if (!array_key_exists($product->id, $this->items)) {
                $this->items[$product->id]=$item;
                $this->totalQty++;
                $item = $this->items[$product->id];
                $this->totalPrice += $product->price;
            }
            else{
                $this->totalQty++;
                $this->totalPrice += $product->price;
            }
        }
$this->items[$product->id]['qty']++;
    }
}
