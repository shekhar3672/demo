 <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="<?php echo e($con->id); ?>">
                        <td>
                        <?php echo e(++$i); ?>

                        </td>
                        <td>
                         <?php echo e($con->first_name); ?>

                        </td>
                        <td>
                          <?php echo e($con->last_name); ?>

                        </td>
                        <td>
                          <?php echo e($con->email); ?>

                        </td>
                        <td>
                          <?php echo e($con->primary_phone); ?>

                        </td>
                        
                         <td class="td-actions text-right">
                             <a href="<?php echo e(url('contact-details/'.$con->id)); ?>"><button type="button" rel="tooltip" title="show" data-id="<?php echo e($con->id); ?>" class="btn btn-warning btn-link btn-sm">
                           <i class="material-icons">remove_red_eye</i>
                          </button></a>
                          
                          <a href="<?php echo e(url('edit-contact/'.$con->id)); ?>"><button type="button"  rel="tooltip" title="Edit job" class="btn btn-success btn-link btn-sm " >
                            <i class="material-icons">edit</i></button></a>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" data-id="<?php echo e($con->id); ?>" class="btn btn-danger btn-link btn-sm delete-con">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                  <?php echo $contacts->appends(Request::capture()->except('page'))->links('contacts/pagination'); ?><?php /**PATH C:\xampp\htdocs\jobist\resources\views/contacts/cont_list.blade.php ENDPATH**/ ?>