<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <title>Electronic Shop</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/user/cart_style.css')); ?>">
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
                <a href="<?php echo e(url('/cart')); ?>"><img src="<?php echo e(asset('assets/images/cart-logo.png')); ?>"></a>
                <span id="num">2</span>
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
    <div id="boody">
        <div class="prods">
            <span id="shopping-cart">SHOPPING CART</span>
            <div class="prod-box">
                <?php $__currentLoopData = $userCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <img src="<?php echo e(asset('uploads/products/'.$cart->image)); ?>">

                <p><?php echo e($cart->product_name); ?></p>
                <p style="color:gray;"><?php echo e($cart->price); ?> $</p>
                <button class="delete">X</button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="total-price">
                <p style="color:gray;">Subtotal</p>
                <p>1100 $</p>
            </div>
        </div>
        <div class="personal-info">
            <form>
                <fieldset>
                    <legend>Address Details</legend>
                    <label>Full name</label>
                    <input type="text" name="name">
                    <label>Phone Number</label>
                    <input type="text" name="number">
                    <label>Email Address</label>
                    <input type="email" name="email">
                    <div class="selects">
                        <div>
                            <label>State</label>
                            <select name="state">
                                <option>Egypt</option>
                                <option>United State</option>
                            </select>
                        </div>
                        <div>
                            <label>City</label>
                            <select name="city">
                                <option>Cairo</option>
                                <option>Assiut</option>
                            </select>
                        </div>
                    </div>
                    <label>Address</label>
                    <input type="text" name="address">
                </fieldset>

            </form>
        </div>
        <div class="card-info">
            <form>
                <fieldset>
                    <legend>Card Details</legend>
                    <label>Name on card</label>
                    <input type="text" name="name_card">
                    <label>Card number</label>
                    <input type="text" name="card-num">
                    <input type="submit" value="Check Out">
                </fieldset>

            </form>
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

</body>

</html>
<?php /**PATH C:\Users\Mahmoud\Desktop\the project\Electronic-E-commerce-project\project\resources\views/cart.blade.php ENDPATH**/ ?>