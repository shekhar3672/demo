<?php $__env->startSection('content'); ?>
<section id="intro">
<div class="carousel-item active">
<!--<div class="carousel-background"><img src="<?php echo e(asset('material')); ?>/img/slider/slider1.jpg" alt=""></div>-->
<div class="carousel-container">
<!--<h2 class="font-color-white">Find Jobs Now more Easy Way</h2>
<p class="font-color-white">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla, magna duis nostra sodales luctus nulla praesent fermentum a elit mollis purus aenean curabitur eleifend </p>-->
<!--<a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>-->
</div>
</div>
</div>
</section>


<div id="search-box" class="margin-none">
<div class="container search-box">
<form method="get" action="<?php echo e(route('job')); ?>" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
<?php echo csrf_field(); ?>
    
<div class="d-flex flex-row align-items-center justify-content-start inline-block">
<span class="large material-icons search">search</span>
<input class="search-box_search_input" name="searchKey" id="searchKey" placeholder="Job Title, Skills"  type="search">
<!--<select class="dropdown_item_select search-box_search_input" name="job_cat" id="job_cat">
	<option value="">Select Job Category</option>
	<?php $__currentLoopData = $jobCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($cat); ?>"><?php echo e($cat); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>-->
<span class="large material-icons margin-top search">place</span>
<input class="search-box_search_input " name="location" id="location" placeholder="Enter Location"  type="search">
</div>
<button type="submit" class="search-box_search_button search_job">Search Jobs</button>
</form>
</div>
</div>


<section id="resent-job-post" class="background-color-white-drak">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h4 class="text-left">Filter Jobs Result</h4>
<div class="vertical-space-30"></div>
<div class="row">
<!--<div class="col-lg-4 col-md-12">
<div class="Job-Category-box">
<p class="title">Job Category</p>
<ul>
<li class="list-item1 "><a href="#" class="font-color-black">Web Developer (54)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">User Experience Design (21)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Digital Marketer (72)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Branding and promotion (54)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">User Experience Design (21)</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Digital Marketer (72)</a></li>
</ul>
</div>
<div class="Job-Nature-box">
<p class="title">Job Nature</p>
<ul>
<li class="list-item1 "><a href="#" class="font-color-black">Full Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
</ul>
</div>
<div class="Salary-Range-box">
<p class="title">Salary Range</p>
<p>
 <input type="text" id="amount1" class="salery-range"> <i class="fa fa-minus minus"></i>
<input type="text" id="amount2" class="salery-range">
</p>
<div id="slider-range"></div>
<p class="small-title">Experience Level</p>
<form action="#" class="search-box_search_form">
<select class="dropdown_item_select search-box_search_input">
<option>Select experience level</option>
<option>Select experience level1</option>
<option>Select experience level2</option>
</select>
<p class="small-title">Location</p>
<input class="search-box_search_input Location " placeholder="Location" required="required" type="search">
<span class="fa fa-map-marker location-icone"></span>
</form>
</div>
<div class="Industry-box">
<p class="title">Industry</p>
<ul>
<li class="deactivate"><a href="#" class="font-color-black">Full Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
<li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
</ul>
</div>
</div>-->
<div class="col-lg-12 col-md-12 " id="tag_container">
<?php echo $__env->make('front_end.job_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>
<div class="vertical-space-60"></div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front_end.front_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/front_end/jobs.blade.php ENDPATH**/ ?>