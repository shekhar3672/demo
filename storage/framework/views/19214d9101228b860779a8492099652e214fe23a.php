<?php $__env->startSection('content'); ?>
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <h3><?php echo e(__('Log in to see contact Management and more.....')); ?> </h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="card card-login card-hidden mb-4">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong><?php echo e(__('Login')); ?></strong></h4>
            <div class="social-line">
              
            </div>
          </div>
          <div class="card-body">
            <p class="card-description text-center"> </p>
            <div class="bmd-form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('Email...')); ?>" value="<?php echo e(old('email', 'admin@material.com')); ?>" required>
              </div>
              <?php if($errors->has('email')): ?>
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('Password...')); ?>" value="<?php echo e(!$errors->has('password') ? "secret" : ""); ?>" required>
              </div>
              <?php if($errors->has('password')): ?>
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember me')); ?>

                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg"><?php echo e(__('Submit')); ?></button>
			
          </div>
        </div>
      </form>
      <div class="row">
       
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __(' Admin')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/auth/login.blade.php ENDPATH**/ ?>