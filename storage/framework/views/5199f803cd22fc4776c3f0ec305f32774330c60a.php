
<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Edit Kategori</h2>
  <form role="form" method="POST" action="<?php echo e(url('kategori_obat/'.$category->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field("PUT"); ?>
    <div class="form-group">
      <label for="namaKategori">Nama Kategori:</label>
      <input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama"
      value="<?php echo e($category->name); ?>">
    </div>
    <div class="form-group">
      <label for="deskripsiKat">Deskripsi:</label>
      <!-- <input type="text" class="form-control" id="desc" placeholder="Input deskripsi" name="desc"> -->
      <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Input deskripsi" >
        <?php echo e($category->description); ?>

      </textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.conquer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/category/edit.blade.php ENDPATH**/ ?>