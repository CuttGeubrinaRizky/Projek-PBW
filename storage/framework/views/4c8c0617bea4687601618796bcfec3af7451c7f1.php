<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <center> <h3>Selamat Datang di Sistem Pengelolaan Keuangan</h3> </center><br>

                    <h5>Halaman Utama<h5>
                    <h6>Selamat Datang <?php echo e(ucfirst(Auth()->user()->name)); ?><h6> <br>

                    <div align="center">
                        <div>
                            <div class="card-main">
                                <img src="<?php echo e(asset('image/masuk.jpg')); ?>" alt="Avatar" class="image">
                                <div class="overlay  overlayLeft">
                                    <div class="text"><b><i>Pemasukan</i></b>
                                        <div class="fluid-container">
                                            <p> <i> Rp. <?php echo e(number_format ($laporan_pemasukan,0)); ?> </i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <img src="<?php echo e(asset('image/keluar.jpg')); ?>" alt="Avatar" class="image">
                                <div class="overlay overlayRight">
                                    <div class="text"><b><i>Pengeluaran</i></b>
                                        <div class="fluid-container">
                                            <p> <i> Rp. <?php echo e(number_format ($laporan_pengeluaran,0)); ?> </i> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <img src="<?php echo e(asset('image/total.jpg')); ?>" alt="Avatar" class="image">
                                <div class="overlay overlayFade">
                                    <div class="text"><b><i>Sisa</i></b>
                                        <div class="fluid-container">
                                            <p> <i> Rp. <?php echo e(number_format ($total_akhir,0)); ?> </i> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/home.blade.php ENDPATH**/ ?>