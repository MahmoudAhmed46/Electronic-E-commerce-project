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
                            <h5 class="card-title">{{$product['title']}}</h5>
                        </div>
                    </div>

                @endforeach
        </div>
        <div class="col-md-4">

        </div>
            @else
            <h1>There is no item in this Card</h1>
        @endif
    </div>
</div>
 @endsection
