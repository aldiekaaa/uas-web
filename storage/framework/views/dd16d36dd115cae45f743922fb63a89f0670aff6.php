<?php $__env->startSection('navbar'); ?>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 shadow-2xl">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap">Dashboard</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
</nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="flex justify-between py-10">
    <h1 class="text-xl font-semibold">Preview Produk</h1>
    <a class="py-1 px-5 bg-blue-500 rounded-lg text-white" href="<?php echo e(route('products.index')); ?>">Back</a>
</div>

<div class="w-full bg-white border border-gray-200 rounded-lg shadow">
    <div class="flex justify-center rounded-xl">
        <img class="my-14 rounded-2xl w-[500px] shadow-lg" src="/image/<?php echo e($product->image); ?>" alt="product image" />
    </div>
    <div class="px-5 pb-5">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900"><?php echo e($product->name); ?></h5>
        <div class="items-center my-10">
            <span class="text-sm text-gray-900"><?php echo e($product->description); ?></span>
        </div>
        <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit Product</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<footer class="p-4 bg-white shadow md:flex md:items-center md:justify-between bottom-0 w-full">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">aldiekaaa™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/user/Documents/uas-web/uas-web-1/resources/views/products/show.blade.php ENDPATH**/ ?>