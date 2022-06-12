<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicines List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  

  <?php $__env->startSection('content'); ?>
<div class="container">
  
  <h2>Categories List</h2>
  <h4 class="text-center">Table List</h1>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listMedicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($li->id); ?></td>
            <td><?php echo e($li->name); ?></td>
            <td><?php echo e($li->description); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
</div>
<?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.conquer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/report/allcategories.blade.php ENDPATH**/ ?>