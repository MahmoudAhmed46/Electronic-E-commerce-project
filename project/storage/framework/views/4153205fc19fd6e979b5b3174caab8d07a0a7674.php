<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <title>Electronic Shop</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/user/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="container">
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
                <a href="<?php echo e(url('/cart')); ?>"><img src="<?php echo e(asset('assets/images/cart-logo.png')); ?>"></a>
                <span id="num">0</span>
            </div>
            <!--Navigation-->
            <div id="navigation">
                <nav id="mainav">
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                    <a href="#">New arrivals</a>
                    <a href="#offers">Deals</a>
                    <a href="#category">Electronics</a>
                    <a href="#category">Accessroies</a>
                    <a href="#products">Products</a>
                    <a href="<?php echo e(url('/history')); ?>">History</a>
                </nav>
            </div>
        </div>
    </div>

    <!--Cover-->
    <!--<div id="cover">
        <img src="<?php echo e(asset('assets/images/electronic-devices-cover.png')); ?>">
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

            <a href="#">
                <div class="catbox">
                    <img src="<?php echo e(asset('assets/images/Labtop.jpg')); ?>" alt="Labtops">
                    <span>Labtops</span>
                </div>
            </a>
            <a href="#">
                <div class="catbox">
                    <img src="<?php echo e(asset('assets/images/mobile.jpg')); ?>" alt="Mobils">
                    <span>Mobils</span>
                </div>
            </a>
            <a href="#">
                <div class="catbox">
                    <img src="<?php echo e(asset('assets/images/LCD screen.jpg')); ?>" alt="LCD screen">
                    <span>LCD screen</span>
                </div>
            </a>
            <a href="#">
                <div class="catbox">
                    <img src="<?php echo e(asset('assets/images/washing.jpg')); ?>" alt="Home Necessities">
                    <span>Home Necessities</span>
                </div>
            </a>
            <a href="#">
                <div class="catbox">
                    <img src="<?php echo e(asset('assets/images/Accessories.jpg')); ?>" alt="Accessories">
                    <span>Accessories</span>
                </div>
            </a>
        </div>
        <!--Products-->
        <div id="products">
            <div id="heading-block">
                <i class="fa fa-simplybuilt" style="font-size:36px"></i>
                <span>Products</span>
            </div>
            <div class="prod-container">
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/samsung-galaxy-note-10.jpg')); ?>" alt="samsung galaxy note 10">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>samsung galaxy note 10</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 300$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/lenovo-ideapad.jpg')); ?>" alt="lenovo ideapad">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>lenovo ideapad</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 800$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/dell-inspiron.jpg')); ?>" alt="dell inspiron">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Dell inspiron</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 1050$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/smart-washing.jpg')); ?>" alt="samsung smart washing machine">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>samsung smart washing machine</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 850$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/toshiba-vacuum-cleaner.jpg')); ?>" alt="toshiba vacuum cleaner">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>toshiba vacuum cleaner</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 100$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/samsung-lcd-screen.jpg')); ?>" alt="samsung lcd screen">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Samsung LCD Screen</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 300$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/lenovo-labtop-charger.jpg')); ?>" alt="lenovo labtop charger">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Lenovo Labtop Charger</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 100$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/Huawei-earphones.jpg')); ?>" alt="Huawei-earphones">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Huawei Earphones</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 20$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/Huawei-Nova-7i_1.jpg')); ?>" alt="Huawei Nova 7i">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Huawei Nova 7i</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 700$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
                <div class="prod-box">
                    <img src="<?php echo e(asset('assets/images/apple-macbook.jpg')); ?>" alt="apple macbook pro">
                    <div class="prod-trans">
                        <div class="prod-feature">
                            <p>Apple MacBook Pro</p>
                            <p style="color:#fff;font-weight: bold;
                                        ">Price : 1500$</p>
                            <input type="button" value="Add to cart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offers  -->
        <div id="offers">
            <div id="heading-block">
                <i class="fa fa-simplybuilt" style="font-size:36px;"></i>
                <span>Offer</span>
            </div>
            <div class="offer">
                <a href="#"><img src="<?php echo e(asset('assets/images/laptop-offer.webp')); ?>"></a>
            </div>
            <div class="offer">
                <a href="#"><img src="<?php echo e(asset('assets/images/offer.jpg')); ?>"></a>
            </div>
            <div class="offer">
                <a href="#"><img src="<?php echo e(asset('assets/images/special-offer.png')); ?>"></a>
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
<?php /**PATH C:\Users\Mahmoud\Desktop\the project\Electronic-E-commerce-project\project\resources\views/home.blade.php ENDPATH**/ ?>