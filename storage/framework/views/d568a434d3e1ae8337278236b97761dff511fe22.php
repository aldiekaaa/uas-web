<!DOCTYPE html>

<html>

<head>
<title><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
<nav class="fixed w-full z-10">
    <?php echo $__env->yieldContent('navbar'); ?>
</nav>

<div class="container mx-auto pt-14">
    <?php echo $__env->yieldContent('content'); ?>
</div>
    <div class="pt-24">
    <?php echo $__env->yieldContent('footer'); ?>
    </div>
</body>

</html><?php /**PATH /Users/user/Documents/uas-web/uas-web-1/resources/views/products/layout.blade.php ENDPATH**/ ?>