

<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Data Pemasukan Anda
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('keuangan.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="hari">Hari:</label>
              <input type="text" class="form-control" name="hari"/>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value=" " class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal"/>
          </div>
          <div class="form-group">
              <label for="cases">Kategori :</label>
              <input list="kategori" name="kategori" class="form-control">
              <datalist id="kategori">
                <option value="Makan">
                <option value="Transportasi">
                <option value="Pendidikan">
              </datalist>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/pemasukan.blade.php ENDPATH**/ ?>