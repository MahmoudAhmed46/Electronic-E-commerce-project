<!DOCTYPE html>
<html>
<head>
    <meta charset="urf-8">
    <title>Electronic Shop</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/user/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Electronic Shop</title>

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
            <!-- </div>-->
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
                                                     document.getElementById('logout-form').submit();" style="color: black;">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
        </div>
        <div id="main-header">
            <!--Logo-->
            <div id="logo">
                <span id="fPart"><a href="home.html">Electronic</a></span><span id="sPart"><a href="home.html">Shop</a></span>
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
                <a href="{{route('product.shoppingCart')}}"><img src="{{asset('assets/images/cart-logo.png')}}"></a>
                <span class="badge">{{Session::has('cart')?Session::get('cart')->totalQty:'0'}}</span>
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

    <!--Cover-->
    <!--<div id="cover">
        <img src="{{asset('assets/images/electronic-devices-cover.png')}}">
    </div>-->
      <section class="home" id="home">
        <div class="titles">
            <div class="titles-wrap">
                <h1>Electronic <span> Shop</span></h1>
                <h2><span class="txt-rotate"></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, tempora.</p>
            </div>
        </div>
    </section>
    <!--Category , Product , offers-->
    <div id="boody">
        <div id="category">
            <div id="heading-block">
                <i class="fa fa-align-justify" style="font-size:36px;"></i>
                <span>Category</span>
            </div>
            @foreach($all_data['categories'] as $category)
                @if($category->pieces > 0)
            <a href="{{route('show',$category->id)}}">
                <div class="catbox">
                    <img src="{{asset('/uploads/products/'. $category->image)}}" alt="{{$category->name}}">
                    <span>{{$category->name}}</span>
                    <p style="position: absolute;top:203px;left:60px;width: 100px;background-color:black;color: white;text-align: center;">Quantity:{{$category->pieces}}</p>
                </div>
            </a>
                @endif
                @endforeach
        </div>
        <!--Products-->
        <div id="products">
            <div id="heading-block">
                <i class="fa fa-simplybuilt" style="font-size:36px"></i>
                <span>Products</span>
            </div>
            <div class="prod-container">
                @foreach($all_data['products'] as $prod)
                <div class="prod-box">
                    <img src="{{asset('/uploads/products/' .$prod->image)}}" alt={{$prod->name}}>
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>{{$prod->name}}</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : {{$prod->price}}$</p>
                            <a class="btn btn-primary" href="{{route('product.addToCart',$prod->id)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
                    {{$all_data['products']->links()}}
            </div>
        </div>
        <!-- offers  -->
        <div id="offers">
            <div id="heading-block">
                <i class="fa fa-simplybuilt" style="font-size:36px;"></i>
                <span>Offer</span>
            </div>
            <div class="offer">
                <a href="#"><img src="{{asset('assets/images/laptop-offer.webp')}}"></a>
            </div>
            <div class="offer">
                <a href="#"><img src="{{asset('assets/images/offer.jpg')}}"></a>
            </div>
            <div class="offer">
                <a href="#"><img src="{{asset('assets/images/special-offer.png')}}"></a>
            </div>
        </div>

    </div>
    <!--Footer-->
    <div id="footer">
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
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
    let typed = new Typed('span.txt-rotate', {
        strings: ["Dear Customer", "All News Electronic Devices","All You need Available With Us"],
        typeSpeed: 100,
        backSpeed: 50,
        fadeOut: false,
        smartBackSPace: true,
        loop: true
    });
</script>
</body>
</html>
