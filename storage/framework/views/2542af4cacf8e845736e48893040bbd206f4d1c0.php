<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php if(Session::get('success')): ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span><?php echo e(Session::get('success')); ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

         <?php if($message = Session::get('error')): ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span><?php echo e($message); ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Users</h4>
            <p class="card-category"> here is the list of Registered User...</p>
            
          </div>
          <div class="card-body">
          </br>
              <!--<div class="row">
                <div class="col-12 text-right">
                <form method="get" action="<?php echo e(route('user')); ?>" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                <?php echo csrf_field(); ?>
               
              
                <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Keyword:</label>
                  <input  class="" name="searchKey" id="searchKey" placeholder="Name,Email"  type="search" aria-required="true"/>
                  </div>
                </div>
                 <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Passing Year:</label>
                  <input class="" name="location" id="pass_year" placeholder="pass_year"  type="search">
                 </div>
                 </div>
                 
                <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Qualification:</label>
                  <input type="search" id="qualification" name="qualification">
                </div>
               </div>
               <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Experience:</label>
                  <input type="search" id="experience" name="experience">
              </div>
              </div>
              
               <div class="common-st-btn"> 
                   <div class="form-group add-bnform-gr">
                  <button type="submit" class="btn btn-sm btn-primary">Search</button>
               
                
              </div>
             </div>
                  </form>

                </div>
              </div>-->
            </br>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Sr.No
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Mobile
                  </th>
                  <th>
                    Address
                  </th>
                  <th>
                    Qulaification
                  </th>
                </thead>
                <tbody>
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="<?php echo e($user->id); ?>">
                        <td>
                        <?php echo e(++$i); ?>

                        </td>
                        <td>
                         <?php echo e($user->name); ?>

                        </td>
                        <td>
                          <?php echo e($user->email); ?>

                        </td>
                        <td>
                          <?php echo e($user->mobile); ?>

                        </td>
                        <td class="text-primary">
                        <?php echo e($user->address); ?>

                        </td>
                        <td>
                          <?php echo e($user->qualification); ?>

                        </td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
              </table>
            <?php echo $users->render(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'Users', 'titlePage' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/users/index.blade.php ENDPATH**/ ?>