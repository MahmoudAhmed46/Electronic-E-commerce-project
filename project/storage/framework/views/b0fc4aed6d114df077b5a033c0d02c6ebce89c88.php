<?php $__env->startSection('content'); ?>
    <!-- page title area end -->

    <!--start main content inner -->
    <div class="col-12">
        <div>
            <?php if(Session::has('success_message')): ?>
                <div class="alert alert-success" id="fadeOutsuccess">
                    <strong>Success!</strong> <?php echo session('success_message'); ?>

                </div>
            <?php endif; ?>
            <?php if(Session::has('danger_message')): ?>
                <div class="alert alert-danger" id="fadeOutwarn">
                    <strong>Warning!</strong> <?php echo session('danger_message'); ?>

                </div>
            <?php endif; ?>
            <h4 class="view-product-title pl--10 pt--20"># Displaying all availabl Products</h4>
            <form action="#">
                <lable class="float-left mrg">Search</lable>
                <input type="text" class="float-right" name="search">
            </form >
        </div>
        <div class="table-responsive mt-5">
            <form action="<?php echo e(url('/admin/view-products')); ?>" method="post">
                <?php echo csrf_field(); ?>
            <table class="table table-striped">
                <thead class="tbl-head-txt">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>CategoryID</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Pieces</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($product->id); ?></th>
                    <th><?php echo e($product->name); ?></th>
                    <th><?php echo e($product->cat_id); ?></th>
                    <th><?php echo e($product->code); ?></th>
                    <th><img src="<?php echo e(asset('/uploads/products/' .$product->image)); ?>" style="width: 150px; height: 100px;"></th>
                    <th><?php echo e($product->price); ?></th>
                    <th><?php echo e($product->quantity); ?></th>

                    <th>
                        <a href="<?php echo e(url('/admin/add-images/'.$product->id)); ?>" title="Add Images" type="button" class="btn btn-info " ><span class="fa fa-image"></span></a>
                        <a href="<?php echo e(url('/admin/edit-products/'.$product->id)); ?>" title="Edit Products" type="button" class="btn btn-warning" ><span class="fa fa-pencil"></span></a>
                        <a href="<?php echo e(url('/admin/delete-product/'.$product->id)); ?>" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>


                    </th>

                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </form>
        </div>
    </div>
    <!--end main content inner -->

    </div>
    <!-- main content area end -->
    </div>
    <!-- page container area end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud\Desktop\the project\Electronic-E-commerce-project\project\resources\views/admin/products/view-products.blade.php ENDPATH**/ ?>