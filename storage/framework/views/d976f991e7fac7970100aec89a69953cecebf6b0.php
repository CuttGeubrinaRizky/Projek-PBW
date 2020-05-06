

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('style.css')); ?>">

</head>
<body class="badan">
  <style>
    .badan{
  background-color: #426e9a;
}
.bg{
  background-color: white;
  background-image:url('login.png');
   /* background-repeat: no-repeat; */
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
h1{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size:35px;
  color:gold;
  margin-top: 0;
  margin-bottom: 0.5rem;
}
  </style>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
            <center> <h1 class="login-heading mb-4">KepiangLon</h1>
              <h3 class="login-heading mb-4">Register here!</h3></center>
               <form action="<?php echo e(url('post-registration')); ?>" method="POST" id="regForm">
                 <?php echo e(csrf_field()); ?>

                <div class="form-label-group">
                  <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
                  <label for="inputName">Name</label>

                  <?php if($errors->has('name')): ?>
                  <span class="error"><?php echo e($errors->first('name')); ?></span>
                  <?php endif; ?>       

                </div> 
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <label for="inputEmail">Email address</label>

                  <?php if($errors->has('email')): ?>
                  <span class="error"><?php echo e($errors->first('email')); ?></span>
                  <?php endif; ?>    
                </div> 

                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                  
                  <?php if($errors->has('password')): ?>
                  <span class="error"><?php echo e($errors->first('password')); ?></span>
                  <?php endif; ?>  
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="<?php echo e(url('login')); ?>">Sign In</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<footer class="footer">
      <div class="text-center">
        <p class="m-0 text-center text-white">Made with ❤ AyuFadhilahGebiNadya</p>
      </div>
    </footer>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelkeuangann\resources\views/auth/registration.blade.php ENDPATH**/ ?>