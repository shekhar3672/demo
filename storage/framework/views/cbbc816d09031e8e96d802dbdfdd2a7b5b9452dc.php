<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="<?php echo e(route('savejob')); ?>" autocomplete="off" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>

            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('Create Contact')); ?></h4>
                <p class="card-category"><?php echo e(__('Contact information')); ?></p>
              </div>
              <div class="card-body ">
                <div class="row">
                <div class="col-12 text-right">
                  <a href="<?php echo e(route('jobs')); ?>" class="btn btn-sm btn-primary">Back</a>
                </div>
              </div>
                <?php if(session('status')): ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span><?php echo e(session('status')); ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('First Name:')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('first_name') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" id="first_name" type="text" placeholder="<?php echo e(__('first name')); ?>" value=""  aria-required="true"/>
                      <?php if($errors->has('first_name')): ?>
                        <span id="first_name-error" class="error text-danger" for="first_name"><?php echo e($errors->first('first_name')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Middle Name:')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('middle_name') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('middle_name') ? ' is-invalid' : ''); ?>" name="middle_name" id="middle_name" type="text" placeholder="<?php echo e(__('middle name')); ?>" value=""  aria-required="true"/>
                      <?php if($errors->has('middle_name')): ?>
                        <span id="middle_name-error" class="error text-danger" for="middle_name"><?php echo e($errors->first('middle_name')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Last Name:')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('last_name') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" id="last_name" type="text" placeholder="<?php echo e(__('last name')); ?>" value=""  aria-required="true"/>
                      <?php if($errors->has('last_name')): ?>
                        <span id="last_name-error" class="error text-danger" for="last_name"><?php echo e($errors->first('last_name')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Primary Phone:')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('primary_phone') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('primary_phone') ? ' is-invalid' : ''); ?>" name="primary_phone" id="primary_phone" type="text" placeholder="<?php echo e(__('primary phone')); ?>" value=""  aria-required="true"/>
                      <?php if($errors->has('primary_phone')): ?>
                        <span id="primary_phone-error" class="error text-danger" for="primary_phone"><?php echo e($errors->first('primary_phone')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Secondary Phone:')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('secondary_phone') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('secondary_phone') ? ' is-invalid' : ''); ?>" name="secondary_phone" id="secondary_phone" type="text" placeholder="<?php echo e(__('secondary phone')); ?>" value=""  aria-required="true"/>
                      <?php if($errors->has('secondary_phone')): ?>
                        <span id="secondary_phone-error" class="error text-danger" for="secondary_phone"><?php echo e($errors->first('secondary_phone')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                
                

                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('email:')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="email" type="email" placeholder="<?php echo e(__('email')); ?>" value=""  aria-required="true"/>
                      <?php if($errors->has('email')): ?>
                        <span id="email-error" class="error text-danger" for="email"><?php echo e($errors->first('email')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>




              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Create Contact')); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'jobs', 'titlePage' => __('Post Job')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/contacts/post_job.blade.php ENDPATH**/ ?>