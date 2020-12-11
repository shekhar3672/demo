<?php $__env->startSection('content'); ?>      
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
              <span class="material-icons">
              person
              </span>
              </div>
              <p class="card-category">Register Users</p>
              <h3 class="card-title"><?php echo e($userCnt); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from App
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
              <span class="material-icons">
              loyalty
              </span>
              </div>
              <p class="card-category">Contact</p>
              <h3 class="card-title"><?php echo e($contactCnt); ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/dashboard.blade.php ENDPATH**/ ?>