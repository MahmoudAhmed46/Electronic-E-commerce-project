<?php $__env->startSection('content'); ?>
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="#">Home</a></li>

                        <li><span>Product Name / </span></li>
                        <li><span>Add Images</span></li>

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
            <h4 class="view-product-title pl--10 pt--20"># Add New Product Images
            </h4>
        </div>
        <div class="container mt-4 ml-5">
            <form>
                <div class="form-group">
                    <label>Product Name: </label>  <span style="color: darkblue;font-size: large">product name</span>
                </div>
                <div class="form-group">
                    <label>Product code: </label>  <span style="color: darkblue;font-size: large">product code</span>
                </div>

                <div class="form-group">
                    <label>Images: </label>
                    <input type="file" name="image[]" id="image" multiple="multiple" required>
                </div>
                <div class="reset-button">
                    <input type="submit" class="btn btn-success" value="Add Image">
                </div>
            </form>
        </div>
    </div>
    <div class="col-12">
        <div>
            <h4 class="view-product-title pl--10 pt--20"># Displying Product Images
            </h4>
        </div>
        <div class="container mt-4 ml-5">
            <form>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mr-3">

                        <thead>
                        <tr class="info">
                            <th>ID</th>
                            <th>Product ID</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>5</td>
                            <td><img src="<?php echo e(asset('assets\images\products\mob.jpg')); ?>" style="width: 150px; height: 100px;"></td>
                            <td  style="text-align:center;">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </a>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>5</td>
                            <td><img src="<?php echo e(asset('assets\images\products\mob.jpg')); ?>" style="width: 150px; height: 100px;"></td>
                            <td  style="text-align:center;">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </a>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>5</td>
                            <td><img src="<?php echo e(asset('assets\images\products\mob.jpg')); ?>" style="width: 150px; height: 100px;"></td>
                            <td  style="text-align:center;">
                                <div class="btn-group">
                                    <a href="#" type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </a>
                                </div>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--end main content inner -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FCI\E-Commerce\Electronic-E-commerce-project\project\resources\views/admin/products/add-images.blade.php ENDPATH**/ ?>