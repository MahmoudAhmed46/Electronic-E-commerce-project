<?php $__env->startSection('content'); ?>

<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="#">Home</a></li>

                    <li><span>Add Banner / </span></li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Mahmoud <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- page container area end -->
<!--start main content inner -->
<div class="col-12">
    <div>
        <h4 class="view-product-title pl--10 pt--20"># Add New Banner
        </h4>
    </div>
    <div class="container mt-4 ml-5">
        <form>
            <div class="form-group">
                <label class="lbl-form">Banner Header</label>
                <input type="text" class="form-control inp" placeholder="Enter Banner Header" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label class="lbl-form">Banner Content</label>
                <textarea name="content" id="content" class="form-control inp"></textarea>
            </div>
            <div class="form-group">
                <label class="lbl-form">Postion</label>
                <input type="number" class="form-control inp" placeholder="Enter Banner Postion" name="postion" id="postion" required>
            </div>
            <div class="form-group">
                <label class="lbl-form">Picture upload</label>
                <input type="file" name="img">
            </div>
            <div>
                <input type="submit" class="btn btn-success mb-3" value="Add Banner">
            </div>
        </form>
    </div>
</div>
<!--end main content inner -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FCI\E-Commerce\Electronic-E-commerce-project\project\resources\views/admin/banners/add-banners.blade.php ENDPATH**/ ?>