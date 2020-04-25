<!DOCTYPE html>
<html>
<head>
    <meta charset="urf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/user/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/user/cart_style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="content">
    <div id="header">
        <div id="subheader">
            <!--<div class="upper-header">-->
            <p>World fastest online shopping place</p>
            <!-- </div>-->
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

@yield('content')

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
