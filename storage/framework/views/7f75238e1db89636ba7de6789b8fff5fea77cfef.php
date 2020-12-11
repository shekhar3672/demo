<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(__('JobFree')); ?></title>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('material')); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo e(asset('material')); ?>/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  
    <link rel="stylesheet" href="<?php echo e(asset('material')); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('material')); ?>/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('material')); ?>/css/matrialize.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('material')); ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('material')); ?>/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('material')); ?>/css/style.css">
    </head>
    <body class="<?php echo e($class ?? ''); ?>">
      
        <div class="wrapper ">
		  <div class="main-panel" style="height:260px!important">   
		    <?php echo $__env->make('front_end.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		    <?php echo $__env->yieldContent('content'); ?>
		    <?php echo $__env->make('front_end.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="modal" id="myModal">
            <div class="container">
            <div class="vertical-space-85"></div>
            <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <div class="modal-body">
            <button class="button button-rounded  close" data-dismiss="modal">&times;</button>
            <video class="" controls>
            <source src="<?php echo e(asset('material')); ?>/video/Pexels_Videos_2706.mp4" type="video/mp4">
            </video>
            </div>
            </div>
            </div>
            </div>
            </div>
		  </div>
		</div>
      
        <!--   Core JS Files   -->
        <script src="<?php echo e(asset('material')); ?>/js/core/jquery.min.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="<?php echo e(asset('material')); ?>/js/core/bootstrap.min.js"></script>
        <script src="<?php echo e(asset('material')); ?>/js/core/owl.carousel.min.js"></script>
        <script src="<?php echo e(asset('material')); ?>/js/core/jquery-ui.min.js"></script>

        <script src="<?php echo e(asset('material')); ?>/js/core/custom.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
        <script>
                $(".search-icone").click(function(){
             // $(".menu").animate({height: "100vh"});
        });

    </script>
    
        <?php echo $__env->yieldPushContent('js'); ?>
    </body>
</html>
<script type="text/javascript">


var _token = '<?php echo e(csrf_token()); ?>';
     var APP_URL = <?php echo json_encode(url('/')); ?>;

     $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {

        $.ajaxSetup({

        headers: {

          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


        $(document).on('click', '.pagination a1',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
  
            getData(page);
        });

        $(document).on('click', '.search_job1',function(event)
        {
            event.preventDefault();
  
            var searchKey = $("#searchKey").val();
            var job_cat=$("#job_cat").val();
            var location=$("#location").val();
  
            $.ajax({
             url: APP_URL + '/job',
             method: 'get',
             data: { "searchKey": searchKey,
                "job_cat": job_cat,
                "location": location
              },
             error: function() {
                swal('Something is wrong',"","");
             },
             success: function(data) {
                    $("#tag_container").empty();
                    $("#tag_container").html(data);
             }
          });
        });
  
    });
  
    function getData(page){

        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
             $("#tag_container").empty();
            $("#tag_container").html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
    

</script>
<?php /**PATH C:\xampp\htdocs\jobist\resources\views/front_end/front_layout.blade.php ENDPATH**/ ?>