<?php $__env->startSection('title','Shopping Cart'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php if(isset($cart)): ?>
        <div class="col-md-8">
            <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Name : </strong><?php echo e($product['title']); ?></h5>
                            <img src="<?php echo e(asset('uploads/products/' .$product['image'])); ?>" style="width: 20%;height: 15%;">
                            <p><strong>Price : $</strong><?php echo e($product['price']); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <p><strong>Total : $<?php echo e($cart->totalPrice); ?></strong></p>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h3 class="card-title">My Cart</h3>
                    <div class="card-text">
                        <p>Total Price are $<?php echo e($cart->totalPrice); ?></p>
                        <p>Total Quantities are $<?php echo e($cart->totalQty); ?></p>
                        <a href="#" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
            <?php else: ?>
            <h1>There are no items in this Card</h1>
        <?php endif; ?>
    </div>
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Electronic-E-commerce-project\project\resources\views/shopping-cart.blade.php ENDPATH**/ ?>