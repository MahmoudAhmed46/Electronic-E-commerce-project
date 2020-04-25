@extends('layouts.app')
@section('title','Shopping Cart')
@section('content')
<div class="container">
    <div class="row">
        @if(isset($cart))
        <div class="col-md-8">
            @foreach($cart->items as $product)
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Name : </strong>{{$product['title']}}</h5>
                            <img src="{{asset('uploads/products/' .$product['image'])}}" style="width: 20%;height: 15%;">
                            <p><strong>Price : $</strong>{{$product['price']}}</p>
                        </div>
                    </div>
                @endforeach
                <p><strong>Total : ${{$cart->totalPrice}}</strong></p>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h3 class="card-title">My Cart</h3>
                    <div class="card-text">
                        <p>Total Price are ${{$cart->totalPrice}}</p>
                        <p>Total Quantities are ${{$cart->totalQty}}</p>
                        <a href="#" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
            @else
            <h1>There are no items in this Card</h1>
        @endif
    </div>
</div>
 @endsection
