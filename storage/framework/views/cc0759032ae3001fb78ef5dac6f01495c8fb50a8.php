<form role="form" action="<?php echo e(url('kategori_obat/'.$data->id)); ?>" method="POST">
        <div class="modal-header">
          <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Edit Kategori A</h4>
        </div>
        <div class="modal-body">
        <div class="container">
          
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-body">
            <div class="form-group">
              <label for="namaKategori">Nama Kategori:</label>
              <input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama"
              value="<?php echo e($data->name); ?>">
            </div>
            <div class="form-group">
              <label for="deskripsiKat">Deskripsi:</label>
              <!-- <input type="text" class="form-control" id="desc" placeholder="Input deskripsi" name="desc"> -->
              <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Input deskripsi">
                <?php echo e($data->description); ?>

              </textarea>
            </div>
          </div>
          
    
          
          
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
</form><?php /**PATH C:\xampp\htdocs\wfp_week1\blog\resources\views/category/getEditForm.blade.php ENDPATH**/ ?>