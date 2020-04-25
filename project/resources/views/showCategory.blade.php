<!DOCTYPE html>
<html>
<head>
    <meta charset="urf-8">
    <title>Electronic Shop</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/user/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="content">
    <div id="header">
        <div id="subheader">
            <!--<div class="upper-header">-->
            <p>World fastest online shopping place</p>
            @guest
                <a href="{{ route('login') }}" style="margin-right:25px;">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  style="color: black;">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            <!-- </div>-->
        </div>
        <div id="main-header">
            <!--Logo-->
            <div id="logo">
                <span id="fPart">Electronic</span><span id="sPart">Shop</span>
            </div>
            <!--Search-->
            <div id="search">
                <form action="#">
                    <input id="search-input" type="text" name="text" placeholder="What are you looking for ?">
                    <input id="search-submit" type="submit" name="submit" value="Search">
                </form>
            </div>
            <!--User Menu-->
            <div id="all-cart">
                <span id="cart-text">Cart</span>
                <a href="{{url('/cart')}}"><img src="{{asset('assets/images/cart-logo.png')}}"></a>
                <span id="num">0</span>
            </div>
            <!--Navigation-->
            <div id="navigation">
                <nav id="mainav">
                    <a href="{{url('/')}}">Home</a>
                    <a href="#">New arrivals</a>
                    <a href="#offers">Deals</a>
                    <a href="#category">Electronics</a>
                    <a href="#category">Accessroies</a>
                    <a href="#products">Products</a>
                    <a href="{{url('/history')}}">History</a>
                </nav>
            </div>
        </div>
    </div>
    <div id="boody">
        <div id="products">
            <div id="heading-block">
                <i class="fa fa-align-justify" style="font-size:36px;"></i>
                <span>{{$data['cat_name']}}</span>
            </div>
            @foreach($data['products'] as $product)
            <div class="prod-box">
                <img src="{{asset('/uploads/products/' .$product->image)}}" alt={{$product->name}}>
                <div class="prod-trans">
                    <div class="prod-feature">
                        <p>{{$product->name}}</p>
                        <p style="color:#fff;font-weight: bold;">Price : {{$product->price}}$</p>
                        <p style="color:#fff;font-weight: bold;">Items : {{$product->quantity}}</p>
                        <a class="btn btn-primary" href="{{route('product.addToCart',$product->id)}}">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div id="footer" >
        <div id="about">
            <h2 style="color: darkred;">About</h2>
            <p>Section 5</p>
            <span>Mahmoud Mohamed Refaie</span>
            <span>Mahmoud Sayed Fathy</span>
            <span>Mahmoud Ahmed Mahmoud</span>
            <span>Mohamed Atef Hassan</span>
            <span>Omar Mohamed Tawfik</span>
        </div>
        <div id="contact">
            <h2 style="color: darkred;">Contact Us</h2>
            <ul>
                <li><a id="facebook" href="https://www.facebook.com/LionMaax"><i class="fa fa-facebook-square" style="font-size: 30px;"></i></a></li>
                <li><a id="github" href="https://github.com/MahmoudMRefaie/E-Commerce-Project"><i class="fa fa-github" style="font-size: 30px;"></i></a>
                </li>
                <li><a id="linkedin" href="https://www.linkedin.com/in/mahmoud-refaie-ba6618186/"><i class="fa fa-linkedin-square" style="font-size: 30px;"></i></a>
                </li>
            </ul>
        </div>
        <hr>
        <p>&copy 2020 Electronic Shop. All rights reserved.</p>
    </div>
</div>
</body>
</html>
