

<?php $__env->startSection('content'); ?>
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">

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
        <form method="get" action="<?php echo e(url('cari-laporan')); ?>">
            <div class="form-group">
                <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="dari">Dari Tanggal :</label>
                <input type="date" id="dari" name="dari" value=" " class="form-control"/>
            </div>
            <div class="form-group">
                <label for="sampai">Sampai Tanggal :</label>
                <input type="date" id="sampai" name="sampai" value=" " class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Cari Data</button>
        </form>

        <?php if(isset($pemasukan)): ?>

        <div class="row">
            <div class="col-md-12">

                <div class="card-header border-0">
                    <h3 class="mb-0"> Data Pemasukan </h3>
                    <button type="submit" class="btn btn-primary">Export to Excel</button>
                </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Hari</td>
                            <td>Tanggal</td>
                            <td>Nominal</td>
                            <td>Kategori</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pemasukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e=>$ps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($e+1); ?></td>
                            <td><?php echo e(date('d M Y', strtotime($ps -> tanggal))); ?></td>
                            <td>Rp. <?php echo e(number_format ($ps -> nominal,0)); ?></td>
                            <td><?php echo e($ps -> kategori); ?></td>
                            <td><?php echo e($ps -> keterangan); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td> Total Pemasukan</td>
                            <td><b><i> Rp. <?php echo e(number_format ($total_pemasukan,0)); ?></i></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php endif; ?>

        <?php if(isset($pengeluaran)): ?>

        <div class="row">
            <div class="col-md-12">

                <div class="card-header border-0">
                    <h3 class="mb-0"> Data Pengeluaran </h3>
                    <button type="submit" class="btn btn-primary">Export to Excel</button>
                </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Hari</td>
                            <td>Tanggal</td>
                            <td>Nominal</td>
                            <td>Kategori</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pengeluaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e=>$pn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($e+1); ?></td>
                            <td><?php echo e(date('d M Y', strtotime($pn -> tanggal))); ?></td>
                            <td>Rp. <?php echo e(number_format ($pn -> nominal,0)); ?></td>
                            <td><?php echo e($pn -> kategori2); ?></td>
                            <td><?php echo e($pn -> keterangan); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td> Total Pengeluaran</td>
                            <td><b><i> Rp. <?php echo e(number_format ($total_pengeluaran,0)); ?></i></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php endif; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/laporan/index.blade.php ENDPATH**/ ?>