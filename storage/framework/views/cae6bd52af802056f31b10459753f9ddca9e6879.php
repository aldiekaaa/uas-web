<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <?php echo $__env->yieldContent('main'); ?>
            <?php echo $__env->yieldContent('sidebar'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH /Users/user/Documents/uas-web/laravel/resources/views/master.blade.php ENDPATH**/ ?>