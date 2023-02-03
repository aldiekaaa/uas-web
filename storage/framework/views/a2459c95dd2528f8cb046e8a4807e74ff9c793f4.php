<!DOCTYPE html>

<html>

<head>
<title><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>

<nav class="">
    <?php echo $__env->yieldContent('navbar'); ?>
</nav>

<div class="container mx-auto">

    <?php echo $__env->yieldContent('content'); ?>

</div>

   

</body>

</html><?php /**PATH /Users/user/Documents/uas-web/laravel/resources/views/products/layout.blade.php ENDPATH**/ ?>