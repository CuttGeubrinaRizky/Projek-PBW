<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>KepiangLon</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<style>
.bg-white{
    background-color:#3490dc !important;
    color:white;
    font-size:20px;

}
/* .nav-item::before,::after{
    font-family:sanserif;
    box-sizing: border-box;
} */
/* *::before,
*::after {
  box-sizing: border-box;
} */

.navbar-brand{
    font-size:25px;
}
footer {
  background-color:#3490dc;
  padding: 5px;
  text-align: center;
  color: white;
  /* width:100%;
    line-height:50px */
   position:fixed;
 bottom:0px; 
 width:100%;
}
.column{
  background-color: red;
    height: 100px;
	width: 200px;
	 /* margin-left: 70px; */
}
/* .dash{
    background-color:blue;
}  */
.-body{
    width: 200px;
    background-color:#3490dc;
}


</style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    KepiangLon
                </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="<?php echo e(url('/pemasukan')); ?>">Pemasukan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="<?php echo e(url('/pengeluaran')); ?>">Pengeluaran</a>
                    </li>
                   <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="<?php echo e(url('/laporan')); ?>">Laporan Keuangan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="<?php echo e(url('/about')); ?>">About</a>
                    </li>
                  </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
          <main class="py-4">
              <?php echo $__env->yieldContent('content'); ?>
          </main>
      </div>
      <footer class="footer">
      <div class="text-center">
        <p class="m-0 text-center text-white">Made with ❤ AyuFadhilahGebiNadya</p>
      </div>
    </footer>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/layout.blade.php ENDPATH**/ ?>