<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <title>History</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/user/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="container">
    <div id="header">
        <div id="subheader">
            <!--<div class="upper-header">-->
            <p>World fastest electronic online shopping place</p>

            <!-- </div>-->
        </div>
        <div id="main-header">
            <!--Logo-->
            <div id="logo">
                <span id="fPart"><a href="home.html">Electronic</a></span><span id="sPart"><a href="home.html">Shop</a></span>
            </div>
            <!--Search-->
            <div id="search">
                <form action="">
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
    <!--Product-->
    <div id="prod-in-cart">
        <!--Products-->
        <div id="my-products">
            <div id="heading-block">
                <h2>My Cart</h2>
            </div>
            <div class="prod-container">

                <div class="prod-box">
                    <img src="{{asset('assets/images/lenovo-ideapad.jpg')}}" alt="lenovo ideapad">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>lenovo ideapad</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 800$</p>
                            <p style="color:#fff;font-weight: bold;
                                    ">Items : 1</p>
                        </div>
                    </div>
                </div>

                <div class="prod-box">
                    <img src="{{asset('assets/images/smart-washing.jpg')}}" alt="samsung smart washing machine">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>samsung smart washing machine</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 850$</p>
                            <p style="color:#fff;font-weight: bold;
                                    ">Items : 1</p>
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="{{asset('assets/images/toshiba-vacuum-cleaner.jpg')}}" alt="toshiba vacuum cleaner">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>toshiba vacuum cleaner</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 100$</p>
                            <p style="color:#fff;font-weight: bold;
                                    ">Items : 1</p>
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="{{asset('assets/images/samsung-lcd-screen.jpg')}}" alt="samsung lcd screen">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Samsung LCD Screen</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 300$</p>
                            <p style="color:#fff;font-weight: bold;
                                    ">Items : 1</p>
                        </div>
                    </div>
                </div>

                <div class="prod-box">
                    <img src="{{asset('assets/images/Huawei-earphones.jpg')}}" alt="Huawei-earphones">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Huawei Earphones</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 20$</p>
                            <p style="color:#fff;font-weight: bold;
                                    ">Items : 1</p>
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="{{asset('assets/images/Huawei-Nova-7i_1.jpg')}}" alt="Huawei Nova 7i">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Huawei Nova 7i</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 700$</p>
                            <p style="color:#fff;font-weight: bold;
                                    ">Items : 1</p>
                        </div>
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
        <p>&copy 2020 Acadmya. All rights reserved.</p>
    </div>

</div>

</body>

</html>
