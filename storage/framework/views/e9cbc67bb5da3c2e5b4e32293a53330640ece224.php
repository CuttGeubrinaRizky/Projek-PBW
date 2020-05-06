

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <h2>Tentang Website</h2>
                    <p> Website ini berisi data pemasukan dan data pengeluaran yang memiliki beberapa fungsi : </p>
                    <ul>
                        <li>Mencatat seluruh data pemasukan dan data pengeluaran sehari-hari. Sehingga memudahkan
                            pengguna untuk membuat rincian pemasukan dan pengeluaran, tanpa perlu membuat rincian keuangan secara
                            manual. </li>
                        <br>
                        <li>Menghitung jumlah pemasukan dan jumlah pengeluaran secara otomatis. Sehingga pengguna tidak
                            perlu untuk menjumlahkan secara manual</li>
                        <br>
                        <li>Menampilkan laporan keuangan sehari-hari</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/about.blade.php ENDPATH**/ ?>