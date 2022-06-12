<!DOCTYPE html>
<html lang="en">
<head>
  <title>Grid Pictures Medicines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <?php $__currentLoopData = $listData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm">
        <p><?php echo e($li->generic_name); ?></p>
      <!-- <img src="<?php echo e(asset('img/'.$li->image)); ?>"> -->
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/medicine/gridmed.blade.php ENDPATH**/ ?>