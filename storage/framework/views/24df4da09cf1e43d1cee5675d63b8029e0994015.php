

<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
  thead{
    background-color:#8b9ca9;
  }
  
</style>
<div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <div class="col-lg-2">
    <a href="<?php echo e(route('pengeluaran.create')); ?>" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Hari</td>
          <td>Tanggal</td>
          <td>Nominal</td>
          <td>Kategori</td>
          <td>Keterangan</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $datakeluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->id); ?></td>
            <td><?php echo e($data->hari); ?></td>
            <td><?php echo e($data->tanggal); ?></td>
            <td><?php echo e($data->nominal); ?></td>
            <td><?php echo e($data->kategori2); ?></td>
            <td><?php echo e($data->keterangan); ?></td>
            <td><a href="<?php echo e(route('pengeluaran.edit', $data->id)); ?>" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="<?php echo e(route('pengeluaran.destroy', $data->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/pengeluaran/index.blade.php ENDPATH**/ ?>