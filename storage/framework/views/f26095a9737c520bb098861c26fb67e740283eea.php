
<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Tambah Kategori</h2>
  <form action="<?php echo e(route('kategori_obat.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="namaKategori">Nama Kategori:</label>
      <input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama">
    </div>
    <div class="form-group">
      <label for="deskripsiKat">Deskripsi:</label>
      <!-- <input type="text" class="form-control" id="desc" placeholder="Input deskripsi" name="desc"> -->
      <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Input deskripsi">

      </textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.conquer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/category/create.blade.php ENDPATH**/ ?>