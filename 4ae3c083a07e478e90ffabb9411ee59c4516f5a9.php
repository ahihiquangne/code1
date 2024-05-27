<?php echo $__env->make('admin.widget.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
              <img src="../admin_asset/images/unnamed.png" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    <?php if(count($errors)>0): ?>
                        <div class="alert alert-danger text-center">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($er); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </div>
                    <?php endif; ?>
                  </div>
                  <form action="<?php echo e(route('admin/login')); ?>" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" 
                        placeholder="Nhập email đăng nhập" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" 
                        placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remember"> Ghi nhớ mật khẩu
                      </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Đăng nhập</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php echo $__env->make('admin.widget.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\WebBanHangSy\electric-store\resources\views/admin/login.blade.php ENDPATH**/ ?>