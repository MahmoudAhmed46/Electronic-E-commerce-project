<?php $__env->startSection('content'); ?>
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="#">Home</a></li>

                        <li><span>Edit Category / </span></li>
                        <li>category name</li>
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
            <?php if(Session::has('success_message')): ?>
                <div class="alert alert-success" id="fadeOutsuccess">
                    <strong>Success!</strong> <?php echo session('success_message'); ?>

                </div>
            <?php endif; ?>
            <?php if(Session::has('warning_message')): ?>
                <div class="alert alert-warning" id="fadeOutwarn">
                    <strong>Warning!</strong> <?php echo session('warning_message'); ?>

                </div>
            <?php endif; ?>
            <h4 class="view-product-title pl--10 pt--20"># Edit Category
            </h4>
        </div>
        <div class="container mt-4 ml-5">
            <form action="<?php echo e(url('/admin/edit-category/'.$categoryValues->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="lbl-form">Category Name</label>
                    <input type="text" class="form-control inp" placeholder="<?php echo e($categoryValues->name); ?>" name="name" id="name" required><br>
                    <div class="form-group">
                        <label class="lbl-form">Parent Category</label>
                        <select name="parient_id" id="parient_id" class="form-control inp">
                            <option value="0">Parent Category</option>
                            <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lev->id); ?>"><?php echo e($lev->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Code</label>
                    <input type="text" class="form-control inp" placeholder="<?php echo e($categoryValues->code); ?>" name="code" id="code" required>
                </div>

                <div class="form-group">
                    <label class="lbl-form">Category Description</label>
                    <textarea name="category_description" id="category_description" class="form-control inp">
                        <?php echo e($categoryValues->description); ?></textarea>
                </div>

                <div class="reset-button">
                    <input type="submit" class="btn btn-success mb-3" value="Edit Category">
                </div>
            </form>
        </div>
    </div>
    <!--end main content inner -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FCI\E-Commerce\Electronic-E-commerce-project\project\resources\views/admin/categories/edit-category.blade.php ENDPATH**/ ?>