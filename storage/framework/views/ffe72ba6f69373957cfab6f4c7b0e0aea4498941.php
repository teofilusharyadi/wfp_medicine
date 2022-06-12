<!-- <!DOCTYPE html>
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
<body> -->
  

<?php $__env->startSection('content'); ?>
<div class="container">

        <div class="flex-center position-ref full-height">
            <li>
                <a href="#">Welcome</a>
            </li>
            <li >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="showInfo()">
                <i class="icon-bulb"></a></i>
            </li>
            <!-- </ul> -->
        </div>   		
        <div id='showinfo'>

        </div>
  
  <h2>Medicines List</h2>
  <h4 class="text-center">Table List</h1>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Generic Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
        <th>Faskes TK 1</th>
        <th>Faskes TK 2</th>
        <th>Faskes TK 3</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listMedicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($li->generic_name); ?></td>
            <td><?php echo e($li->form); ?></td>
            <td><?php echo e($li->restriction_formula); ?></td>
            <td><?php echo e($li->description); ?></td>
            <td><?php echo e($li->faskes_tk1); ?></td>
            <td><?php echo e($li->faskes_tk2); ?></td>
            <td><?php echo e($li->faskes_tk3); ?></td>
            <td>
              <a class="btn btn-default" data-toggle="modal" href="#detail_<?php echo e($li->id); ?>" 
                data-toggle="modal"><?php echo e($li->generic_name); ?></a>  

              <div class="modal fade" id="detail_<?php echo e($li->id); ?>" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><?php echo e($li->generic_name); ?></h4>
                    </div>
                    <div class="modal-body">
                      <img src="<?php echo e(asset('img/'.$li->image)); ?>" height='200px'/>
                    </div>
	                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
            <td>
              <a href="<?php echo e(url('obat/'.$li->id.'/edit')); ?>" 
              class="btn btn-xs btn-info">Edit</a>
              <form method="POST" action="<?php echo e(url('obat/'.$li->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="delete" class="btn btn-danger btn-xs"
                onclick="if(!confirm('Are you sure to delete this data?')) return false;">
              </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <br><br>
  <h4 class="text-center">Grid Pictures</h1>
  <h6>Analgesik Non Narkotik</h6>
  <br>
  <div class="container">
  <div class="row">
    <?php $__currentLoopData = $listMedCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm">        
        <img src="<?php echo e(asset('img/'.$li->image)); ?>" width="250" height="250">
        <p><?php echo e($li->generic_name); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
 </div>
</div>
        <?php $__env->startSection('javascript'); ?>
        <script>
        function showInfo()
        {
            $.ajax({
            type:'POST',
            url:'/medicines/showInfo',
            data:'_token=<?php echo csrf_token() ?>',
            success: function(data){
                $('#showinfo').html(data.msg)
            }
            });
        }
        </script>
        <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<!-- 
</body>
</html> -->

<?php echo $__env->make('layouts.conquer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/medicine/index.blade.php ENDPATH**/ ?>