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
            <h4 class="card-title ">Contacts</h4>
            <p class="card-category"> here is the list of Contacts...</p>
            <a href="<?php echo e(route('createContact')); ?>">
            <span class="material-icons" rel="tooltip" title="create" style="float:right;color:white">add</span>
          </a>
          </div>
          <div class="card-body">
          </br>
              <div class="row">
                <div class="col-12 text-right">
                <form method="get" action="<?php echo e(route('contacts')); ?>" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                <?php echo csrf_field(); ?>
               
               <div class="common-st-btn"> 
                   <div class="form-group">
                    <label for="usr">  Keyword:</label>
                  <input  class="searchInput" name="searchKey" id="searchKey" placeholder="Email, first name, last name"  type="search" aria-required="true"/>
                  </div>
                </div>
              
               <div class="common-st-btn"> 
                   <div class="form-group add-bnform-gr">
                  <button type="submit" class="btn btn-sm btn-primary searchData">Search</button>
               
                  
              </div>
             </div>
                  

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
                    First Name
                  </th>
                  <th>
                    Last Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Primary phone
                  </th>
                  <th class="text-right">
                    Action
                  </th>
                </thead>
                <tbody id="tag_container">
                  <?php echo $__env->make('contacts.cont_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'contacts', 'titlePage' => __('Contacts Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/contacts/index.blade.php ENDPATH**/ ?>