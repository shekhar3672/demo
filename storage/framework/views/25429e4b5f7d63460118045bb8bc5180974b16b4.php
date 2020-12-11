 <header class="header">

<!--<div class="top_bar background-color-orange">
<div class="top_bar_container">
<div class="container">
<div class="row">
<div class="col">
<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
<ul class="top_bar_contact_list">
<li>
<i class="fa fa-phone coll" aria-hidden="true"></i>
<div class="contact-no">0123 4567 8912</div>
</li>
<li>
<i class="fa fa-envelope coll" aria-hidden="true"></i>
<div class="email">example@jobtend.com</div>
</li>
</ul>
<div class=" ml-auto ">-->
<!--<div class="search_button search"><i class="large material-icons search-icone">search</i></div>-->
<!--<div class="hamburger menu_mm  search_button transparent search display"><i class="large material-icons font-color-white  search-icone  menu_mm ">menu</i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>-->

<div class="header_container background-color-orange-light">
<div class="container">
<div class="row">
<div class="col">
<div class="header_content d-flex flex-row align-items-center justify-content-start">
<div class="logo_container">
<a href="<?php echo e(route('job')); ?>">
<img src="<?php echo e(asset('material')); ?>/img/logo.png" class="logo-text" alt="">
</a>
</div>
<nav class="main_nav_contaner ml-auto">
<ul class="main_nav">
    <li>
        <a href="#" class="upload-resume">Upload Resume</a>
    </li>
    <li>
        <a href="#" class="download-app">Download APP</a>
    </li>
</ul>
<!--<div class="hamburger menu_mm menu-vertical">
<i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
</div>-->
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
<div class="menu_close_container">
<div class="menu_close">
<div></div>
<div></div>
</div>
</div>
<nav class="menu_nav">
<ul class="menu_mm">
<li class="dropdown menu_mm">
<a href="<?php echo e(route('jobs')); ?>">Home
<span class="caret"></span></a>
</li>
<li class="dropdown menu_mm">
<a href="<?php echo e(route('jobs')); ?>">Job
<span class="caret"></span></a>
</li>
<li class="menu_mm"><a href="<?php echo e(route('about')); ?>">About</a></li>
<li class="menu_mm"><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
</ul>
</nav>
</div>
</header><?php /**PATH C:\xampp\htdocs\jobist\resources\views/front_end/header.blade.php ENDPATH**/ ?>