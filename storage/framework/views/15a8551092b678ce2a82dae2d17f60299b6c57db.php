

<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data Pengeluaran Anda
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
      <form method="post" action="<?php echo e(route('pengeluaran.update', $datakeluar->id )); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PATCH'); ?>
              <label for="hari">Hari:</label>
              <?php 
                $options = array ("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
              ?>
              <select name="hari" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datakeluar['hari'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value="<?php echo e($datakeluar->tanggal); ?>" class="form-control"/>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal" value="<?php echo e($datakeluar->nominal); ?>"/>
          </div>
          <div class="form-group">
              <label for="kategori2">Kategori Pengeluaran :</label>
              <?php 
                $options = array ("Asuransi","Belanja","Elektronik","Hadiah","Hewan Peliharaan","Hiburan","Kantor","Kecantikan","Kesehatan","Makanan",
                "Minuman","Kendaraan Umum","Olahraga","Pajak","Pakaian","Pendidikan","Pulsa","Rumah","Sosial","Tagihan","Transportasi","Lain-lain");
              ?>
              <select name="kategori2" class="form-control"/>
                  <?php foreach ($options as $option): ?>
                      <option value="<?php echo $option; ?>"<?php if ($datakeluar['kategori2'] == $option): ?> selected="selected"<?php endif; ?>>
                          <?php echo $option; ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <input type="text" class="form-control" name="keterangan" value="<?php echo e($datakeluar->keterangan); ?>"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/pengeluaran/edit.blade.php ENDPATH**/ ?>