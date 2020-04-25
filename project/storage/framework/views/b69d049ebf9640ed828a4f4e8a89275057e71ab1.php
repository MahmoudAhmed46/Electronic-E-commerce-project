<?php $__env->startSection('content'); ?>
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Edit Product / </span></li>
                        <li>Product name</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="<?php echo e(asset('assets/images/author/avatar.png')); ?>" alt="avatar">
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
            <h4 class="view-product-title pl--10 pt--20"># Edit the Product</h4>
        </div>
        <div class="container mt-4 ml-5">
            <form action="<?php echo e(url('/admin/edit-products/'.$products->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="lbl-form">Product Name</label>
                    <input type="text" class="form-control inp" value="<?php echo e($products->name); ?>" name="product_name" id="product_name" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Under Category</label>
                    <select name="cat_id" id="cat_id" class="form-control inp">
                        <option value='' selected disabled> select </option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($category->id); ?> <?php if($category->id==$products->cat_id): ?> selected <?php endif; ?>>
                                <?php echo e($category->name); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Code</label>
                    <input type="text" class="form-control inp" value="<?php echo e($products->code); ?>" name="product_code" id="product_code" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Product Price</label>
                    <input type="number" class="form-control inp" value="<?php echo e($products->price); ?>" name="product_price" id="product_price" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Product Quantity</label>
                    <input type="number" class="form-control inp" value="<?php echo e($products->quantity); ?>"  name="quantity" id="quantity" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Product Description</label>
                    <textarea name="product_description" id="product_description" value="<?php echo e($products->description); ?>" class="form-control inp"></textarea>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Picture upload</label>
                    <input type="file" name="img">
                </div>
                <div class="reset-button">
                    <input type="submit" class="btn btn-success mb-3" value="Edit Product">
                </div>
            </form>
        </div>
    </div>
    <!--end main content inner -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Electronic-E-commerce-project\project\resources\views/admin/products/edit-products.blade.php ENDPATH**/ ?>