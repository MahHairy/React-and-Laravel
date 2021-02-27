<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('pageTitle'); ?> <?php echo e(config('app.name')); ?></title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>" />

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
    </head>
    <body>
        <!-- wrapper page -->
        <div class="wrapper">
            <!-- main header -->
            <?php echo $__env->make('layouts._partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--  body-content -->
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.2/dist/medium-zoom.min.js"></script>
        <script>
            feather.replace();
            mediumZoom(document.querySelectorAll('.medium-zoom-image'));
        </script>
    </body>
</html><?php /**PATH C:\Users\MahHa\evadus-social-master\resources\views/layouts/master.blade.php ENDPATH**/ ?>