<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="detail width-100 job-listing">

<div class="media-body  text-align-center ">
    <div class="clear-fix">
        <div class="float-left text-left">
            <h6><span class="text font-size font-color-black font-color-black"><b class="bold_text"><?php echo e("Job Title"); ?></b> : <a href="<?php echo e(url('job-info/'.$job->id)); ?>" class="font-color-black"><?php echo e(ucwords($job->title)); ?></a></span>  </h6>
        </div>   
        <div class="float-right text-right">
            <p class="date-time text font-size font-color-black font-color-black"><b class="bold_text">Posted On</b> : <?php echo e(date("d-m-Y",strtotime($job->date_created))); ?></p>
        </div> 
    </div>
    <div class="clear-fix">
        <div class="float-left text-left">
            <span class="text font-size font-color-black"><b class="bold_text"><?php echo e("Comapnay Name"); ?></b> : <?php echo e(ucwords($job->company_name)); ?></span>
            <br />
            <span class="text font-size"><b class="bold_text"><?php echo e("Location"); ?></b> : <?php echo e($job->job_location); ?></span>
            <br />
            <span class="text font-size"><b class="bold_text"><?php echo e("Key Skill"); ?></b> : <?php echo e($job->skills); ?></span>
        </div>
        <div class="float-right text-align-center">
            <a href="<?php echo e(url('job-info/'.$job->id)); ?>" target="_blank" class="part-full-time">Apply</a>
        </div>    
    </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<div class="vertical-space-20"></div>
<div class="vertical-space-25"></div>
<div class="job-list width-100" >
 <?php echo $jobs->appends(Request::capture()->except('page'))->links('front_end/pagination'); ?>


</div>
</div><?php /**PATH C:\xampp\htdocs\jobist\resources\views/front_end/job_list.blade.php ENDPATH**/ ?>