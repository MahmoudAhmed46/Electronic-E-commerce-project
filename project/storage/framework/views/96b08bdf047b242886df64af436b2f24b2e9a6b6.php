<?php $__env->startSection('content'); ?>

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right" style="height: 70px;">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: white;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="bg-light div1-mar">
        <!-- sales report area start -->
        <div class="row">
            <div class="col-sm-3 mt-4  div-report" style="margin-left: 70px;">
                <h4 class="p-2 text-center text-light pt-4">Orders</h4>
                <h4 class="p-2 text-center text-light  pt-4">565</h4>
            </div>
            <div class="col-sm-3 mt-4  div-report">
                <h4 class="p-2 text-center text-light  pt-4">Selas</h4>
                <h4 class="p-2 text-center text-light  pt-4">$ 65856</h4>
            </div>
            <div class="col-sm-3 mt-4  div-report">
                <h4 class="p-2 text-center text-light  pt-4">Registerations</h4>
                <h4 class="p-2 text-center text-light  pt-4">3267</h4>
            </div>

        </div>
        <!-- sales report area end -->

    </div><br>

    <!-- table orders start!-->
    <div class="div-order-table bg-light">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="p-5 pt--20 order-title"># Table Orders List</h3>
            </div>
        </div>
        <div class="container">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Order Name</th>
                    <th>Order code</th>
                    <th>Quantity</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <th>12</th>
                    <th>Mahmoud</th>
                    <th>laptop HD</th>
                    <th>lap56</th>
                    <th>1</th>
                    <th>52645216451</th>
                    <th>Sohag,....</th>
                    <th>4700</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>12</th>
                    <th>Mahmoud</th>
                    <th>laptop HD</th>
                    <th>lap56</th>
                    <th>1</th>
                    <th>52645216451</th>
                    <th>Sohag,....</th>
                    <th>4700</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>12</th>
                    <th>Mahmoud</th>
                    <th>laptop HD</th>
                    <th>lap56</th>
                    <th>1</th>
                    <th>52645216451</th>
                    <th>Sohag,....</th>
                    <th>4700</th>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <!-- table orders  end!-->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FCI\E-Commerce\Electronic-E-commerce-project\project\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>