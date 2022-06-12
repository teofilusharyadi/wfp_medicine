

<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>
<?php //dd(session()->get('cart'))?>

    <div class="container products">

        <div class="row">
            <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo e(asset('img/'.$m->image)); ?>" alt="">
                    <div class="caption">
                        <h4><?php echo e($m->generic_name); ?></h4>
                        <p><?php echo e($m->description); ?></p>
                        <p><strong>Price: </strong> 567.7$</p>
                        <p class="btn-holder">
                            <a href="<?php echo e(url('add-to-cart/'.$m->id)); ?>" 
                            class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- End row -->

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/frontend/product.blade.php ENDPATH**/ ?>