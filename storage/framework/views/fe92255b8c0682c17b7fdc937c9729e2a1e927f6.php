

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
      <form method="post" action="<?php echo e(route('pemasukan.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="hari">Hari:</label>
              <select name="hari" id="hari" class="form-control">
                <option value="">Pilih Hari</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
          </div>
          <div class="form-group">
              <label for="tanggal">Tanggal :</label>
              <input type="date" id="tanggal" name="tanggal" value=" " class="form-control"/>
          </div>
          <div class="form-group">
              <label for="nominal ">Nominal :</label>
              <input type="text" class="form-control" name="nominal"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori Pemasukan :</label>
              <select name="kategori" id="kategori" class="form-control">
                <option value="">Pilih Kategori Pemasukan</option>
                <option value="Bonus">Bonus</option>
                <option value="Deposito">Deposito</option>
                <option value="Dividen">Dividen</option>
                <option value="Gaji">Gaji</option>
                <option value="Hasil Usaha">Hasil Usaha</option>
                <option value="Hibah">Hibah</option>
                <option value="Investasi">Investasi</option>
                <option value="Kupon">Kupon</option>
                <option value="Pengembalian Dana">Pengembalian Dana</option>
                <option value="Pengharagaan">Penghargaan</option>
                <option value="Penyewaan">Penyewaan</option>
                <option value="Pinjaman">Pinjaman</option>
                <option value="Tabungan">Tabungan</option>
                <option value="Lain-lain">Lain-lain</option>
              </select>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/pemasukan/create.blade.php ENDPATH**/ ?>