<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      <?php echo e(__('Admin')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
          <i class="material-icons">dashboard</i>
            <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li>
      
      <li class="nav-item<?php echo e($activePage == 'contacts' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('contacts')); ?>">
          <i class="material-icons">content_paste</i>
            <p><?php echo e(__('contacts')); ?></p>
        </a>
      </li>
      


      <li class="nav-item<?php echo e($activePage == 'reports' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('report')); ?>">
          <i class="material-icons">assignment_return</i>
            <p><?php echo e(__('Reports')); ?></p>
        </a>
      </li>

     
    </ul>
  </div>
</div><?php /**PATH C:\xampp\htdocs\demo_contact\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>