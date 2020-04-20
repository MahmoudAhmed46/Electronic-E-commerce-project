<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <title>Electronic Shop</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/user/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="container">
    <div id="header">
        <div id="subheader">
            <!--<div class="upper-header">-->
            <p>World fastest online shopping place</p>
            <a href="#">Guest</a> <a href="#">Consume</a>
            <a href="#">Donwload App</a> <a href="#">Help</a>
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
                    <a href="{{asset('/user')}}">Home</a>
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
                <span>Labtops</span>
            </div>
            <div class="prod-box">
                <img src="{{asset('assets/images/lenovo-ideapad.jpg')}}" alt="lenovo ideapad">
                <div class="prod-trans">
                    <div class="prod-feature">
                        <p>lenovo ideapad</p>
                        <p style="color:#fff;font-weight: bold;">Price : 800$</p>
                        <p style="color:#fff;font-weight: bold;">Items : 1</p>
                    </div>
                </div>
            </div>
            <div class="prod-box">
                <img src="{{asset('assets/images/dell-inspiron.jpg')}}" alt="dell inspiron">
                <div class="prod-trans">
                    <div class="prod-feature">
                        <p>Dell inspiron</p>
                        <p style="color:#fff;font-weight: bold;">Price : 1050$</p>
                        <input type="button" value="Add to cart">
                    </div>
                </div>
            </div>
            <div class="prod-box">
                <img src="{{asset('assets/images/lenovo-labtop-charger.jpg')}}" alt="lenovo labtop charger">
                <div class="prod-trans">
                    <div class="prod-feature">
                        <p>Lenovo Labtop Charger</p>
                        <p style="color:#fff;font-weight: bold;">Price : 100$</p>
                        <input type="button" value="Add to cart">
                    </div>
                </div>
            </div>
            <div class="prod-box">
                <img src="{{asset('assets/images/apple-macbook.jpg')}}" alt="apple macbook pro">
                <div class="prod-trans">
                    <div class="prod-feature">
                        <p>Apple MacBook Pro</p>
                        <p style="color:#fff;font-weight: bold;">Price : 1500$</p>
                        <input type="button" value="Add to cart">
                    </div>
                </div>
            </div>

        </div>
    </div>
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
</body>
</html>
