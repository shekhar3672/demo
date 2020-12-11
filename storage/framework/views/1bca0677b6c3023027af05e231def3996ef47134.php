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
            <h4 class="card-title ">Jobs</h4>
            <p class="card-category"> here is the list of posted job...</p>
            <a href="<?php echo e(route('postjob')); ?>">
            <span class="material-icons" rel="tooltip" title="Post Job" style="float:right;color:white">add</span>
          </a>
          </div>
          <div class="card-body">
          </br>
              <div class="row">
                <div class="col-12 text-right">
                <form method="get" action="<?php echo e(route('jobs')); ?>" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                <?php echo csrf_field(); ?>
               
               <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Keyword:</label>
                  <input  class="" name="searchKey" id="searchKey" placeholder="Job title,Skills,Company"  type="search" aria-required="true"/>
                  </div>
                </div>
                 <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Location:</label>
                  <input class="" name="location" id="location" placeholder="Location"  type="search">
                 </div>
                 </div>
                 
                <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  From Date:</label>
                  <input type="date" id="from_date" name="from_date">
                </div>
               </div>
               <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  To Date:</label>
                  <input type="date" id="to_date" name="to_date">
              </div>
              </div>
              
               <div class="common-st-btn"> 
                   <div class="form-group add-bnform-gr">
                  <button type="submit" class="btn btn-sm btn-primary">Search</button>
               
                  
              </div>
             </div>
                  </form>

                </div>
              </div>
            </br>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Sr.No
                  </th>
                  <th>
                    Title
                  </th>
                  <th>
                    Location
                  </th>
                  <th>
                    Created Date
                  </th>
                  <th>
                    Status
                  </th>
                  <th class="text-right">
                    Action
                  </th>
                </thead>
                <tbody>
                   <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="<?php echo e($job->id); ?>">
                        <td>
                        <?php echo e(++$i); ?>

                        </td>
                        <td>
                         <?php echo e($job->title); ?>

                        </td>
                        <td>
                          <?php echo e($job->job_location); ?>

                        </td>
                        <td>
                          <?php echo e($job->date_created); ?>

                        </td>
                        <td class="text-primary">
                          <?php if($job->status==1): ?>
                          <?php echo e('Expired'); ?>

                          <?php else: ?>
                          <?php echo e('Active'); ?>

                          <?php endif; ?>
                        </td>
                         <td class="td-actions text-right">
                             <a href="<?php echo e(url('job-details/'.$job->id)); ?>"><button type="button" rel="tooltip" title="show" data-id="<?php echo e($job->id); ?>" class="btn btn-warning btn-link btn-sm">
                           <i class="material-icons">remove_red_eye</i>
                          </button></a>
                          
                          <a href="<?php echo e(url('edit-job/'.$job->id)); ?>"><button type="button"  rel="tooltip" title="Edit job" class="btn btn-success btn-link btn-sm " >
                            <i class="material-icons">edit</i></button></a>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" data-id="<?php echo e($job->id); ?>" class="btn btn-danger btn-link btn-sm delete-job">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
              </table>
            <?php echo $jobs->render(); ?>

            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'jobs', 'titlePage' => __('Job Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/jobs/index.blade.php ENDPATH**/ ?>