<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="<?php echo e(asset('assets/images/icon/logo.png')); ?>" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="<?php echo e(url('/')); ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>
                    <li>
                        <a href="#" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Banners
                                    </span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo e(url('/admin/add-banners')); ?>">Add Banners</a></li>
                            <li><a href="<?php echo e(url('/admin/view-banners')); ?>">View Banners</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Categories
                                    </span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo e(url('/admin/add-category')); ?>">Add Categories</a></li>
                            <li><a href="<?php echo e(url('/admin/view-category')); ?>">View Categories</a></li>
                        </ul>
                    </li>       <li>
                        <a href="#" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Products
                                    </span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo e(url('/admin/add-products')); ?>">Add Products</a></li>
                            <li><a href="<?php echo e(url('/admin/view-products')); ?>">View Products</a></li>
                        </ul>
                    </li>       <li>
                        <a href="#" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Coupons
                                    </span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo e(url('#')); ?>">Add Coupons</a></li>
                            <li><a href="<?php echo e(url('#')); ?>">View Coupons</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end --><?php /**PATH F:\laravel\project\resources\views/layouts/adminLayout/sidebar.blade.php ENDPATH**/ ?>