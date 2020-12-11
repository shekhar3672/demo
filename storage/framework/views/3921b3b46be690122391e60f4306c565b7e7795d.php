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
            <h4 class="card-title ">Users Filters</h4>
            
           
          </div>
          <div class="card-body">
          </br>
              <div class="row">
                <div class="col-12 text-right">
                <form method="post" action="<?php echo e(route('download')); ?>" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                <?php echo csrf_field(); ?>
                
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
                   <div class="form-group">
                    <label for="usr"> Location:</label>
                  <input  class="" name="location" id="location" placeholder="Location"  type="search" aria-required="true"/>
                  </div>
                </div>
                 <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Salary:</label>
                  <input class="" name="salary" id="salary" placeholder="Salary"  type="search">
                 </div>
                 </div>
                 
               <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Experience:</label>
                  <input  class="" name="experience" id="experience" placeholder="Experience"  type="search" aria-required="true"/>
                  </div>
                </div>
                 <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Year :</label>
                  <input class="" name="year_pass" id="year_pass" placeholder="Passing Year"  type="search">
                 </div>
                 </div>

                 <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Qualification:</label>
                  <input  class="" name="qualification" id="qualification" placeholder="Qualification"  type="search" aria-required="true"/>
                  </div>
                </div>
                 <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Key Skill:</label>
                  <input class="" name="skill" id="skill" placeholder="Skills"  type="search">
                 </div>
                 </div>
             </div>

             <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Download Report')); ?></button>
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'reports', 'titlePage' => __('Report Download')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/users/report_filter.blade.php ENDPATH**/ ?>