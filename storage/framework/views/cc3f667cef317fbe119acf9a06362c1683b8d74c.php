<?php $__env->startSection('title', 'Edit Data Produk'); ?>

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
<div class="flex justify-between pt-10">
    <h1 class="text-xl font-semibold my-5">Edit Data Produk</h1>
    <div>
        <a class="py-1 px-5 bg-red-500 rounded-lg text-white" href="<?php echo e(route('products.index')); ?>">Back</a>
    </div>
</div>

<?php if($errors->any()): ?>
<div id="alert-1" class="flex p-4 mb-4 text-red-500 rounded-lg bg-blue-200 "
    role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm font-medium text-red-500">
        <p>Masukan isian yang kosong</p>
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
</div>
    <?php endif; ?>

<form action="<?php echo e(route('products.update',$product->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Produk</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="<?php echo e($product->name); ?>" name="name" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="mb-6">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi
                            Produk</label>
                        <textarea type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="<?php echo e($product->description); ?>" name="description"></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Gambar
                            Produk</label>
                        <input
                            class="block w-full text-sm p-1 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 "
                            aria-describedby="user_avatar_help" name="image" type="file">
                        <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">Masukkan foto produk yang menarik
                            <img src="/image/<?php echo e($product->image); ?>" width="300px">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/user/Documents/uas-web/laravel/resources/views/products/edit.blade.php ENDPATH**/ ?>