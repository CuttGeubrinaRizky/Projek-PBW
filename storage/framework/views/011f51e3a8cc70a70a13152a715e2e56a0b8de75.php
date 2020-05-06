

<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data Pemasukan Anda
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
      <form method="post" action="<?php echo e(route('pemasukan.update', $datamasuk->id )); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PATCH'); ?>
              <label for="hari">Hari:</label>
              <?php 
                $options = array ("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
              ?>
              <select name="hari" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datamasuk['hari'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value="<?php echo e($datamasuk->tanggal); ?>" class="form-control"/>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal" value="<?php echo e($datamasuk->nominal); ?>"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori Pemasukan :</label>
              <?php 
                $options = array ("Bonus","Deposito","Dividen","Gaji","Hasil Usaha","Hibah","Investasi","Kupon","Pengembalian Dana",
                "Pengharagaan","Penyewaan","Pinjaman","Tabungan","Lain-lain");
              ?>
              <select name="kategori" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datamasuk['kategori'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan" value="<?php echo e($datamasuk->keterangan); ?>"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/pemasukan/edit.blade.php ENDPATH**/ ?>