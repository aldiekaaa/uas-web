<?php $__env->startSection('content'); ?>

<div class="flex justify-between pt-10">
    <h1 class="text-xl font-semibold my-5">Data Produk</h1>
    <div>
        <a class="py-1 px-5 bg-red-500 rounded-lg text-white" href="<?php echo e(route('products.index')); ?>">Back</a>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Masukkan isian yang kosong</strong><br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="">*<?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<div class="container mx-auto">
<form class="w-[500px]" form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Produk</label>
        <input type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            name="name" required>
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Produk</label>
        <textarea type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            name="description">
</textarea>
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Gambar Produk</label>
        <input
            class="block w-full text-sm p-1 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 "
            aria-describedby="user_avatar_help" name="image" type="file">
        <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">Masukkan foto produk yang menarik</div>
    </div>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/user/Documents/uas-web/laravel/resources/views/products/create.blade.php ENDPATH**/ ?>