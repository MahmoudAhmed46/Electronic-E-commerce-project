<?php $__env->startSection('title','Shopping Cart'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php if(isset($cart)): ?>
        <div class="col-md-8">
            <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product['title']); ?></h5>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-4">

        </div>
            <?php else: ?>
            <h1>There is no item in this Card</h1>
        <?php endif; ?>
    </div>
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Electronic-E-commerce-project\project\resources\views/shopping-cart.blade.php ENDPATH**/ ?>