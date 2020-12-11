
<?php if($paginator->hasPages()): ?>


<ul class="pagination justify-content-end margin-auto">

<?php if($paginator->onFirstPage()): ?>
            <li class="page-item"><a class="page-link pdding-none"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<?php else: ?>
<li class="page-item"><a class="page-link pdding-none" href="<?php echo e($paginator->previousPageUrl()); ?>"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<?php endif; ?>

 <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="disabled"><span><?php echo e($element); ?></span></li>
            <?php endif; ?>
            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item"><a class="page-link active"><?php echo e($page); ?></a></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($paginator->hasMorePages()): ?>

        <li class="page-item">
<a class="page-link pdding-none" href="<?php echo e($paginator->nextPageUrl()); ?>"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
        <?php else: ?>
            
        <li class="page-item">
<a class="page-link pdding-none" > <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
        <?php endif; ?>

</ul>


<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\demo_contact\resources\views/contacts/pagination.blade.php ENDPATH**/ ?>