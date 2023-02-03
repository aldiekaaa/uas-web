<?php $__env->startSection('title', 'Data Produk'); ?>

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
    <h1 class="text-xl font-semibold">Data Produk</h1>
    <a class="py-1 px-5 bg-blue-500 rounded-lg text-white" href="<?php echo e(route('products.create')); ?>"> Add Product</a>
</div>

    <?php if($message = Session::get('success')): ?>
    <div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
    role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm font-medium">
        <p><?php echo e($message); ?></p>
    </div>
    <button type="button"
        class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-1" aria-label="Close">
        <span class="">x</span>
    </button>
</div>
    <?php endif; ?>

    <div class="relative overflow-x-auto sm:rounded-lg mx-auto shadow-2xl">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <td scope="col" class="px-6 py-3">
                    Nomor
                </td>
                <td scope="col" class="px-6 py-3">
                    Gambar
                </td>
                <td scope="col" class="px-6 py-3">
                    Nama
                </td>
                <td scope="col" class="px-6 py-3">
                    Deskripsi
                </td>
                <td scope="col" class="px-6 col col-span-3 py-3">
                </td>
                <td scope="col" class="px-6 col col-span-3 py-3">
                </td>
                <td scope="col" class="px-6 col col-span-3 py-3">
                </td>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr class="bg-white border-b hover:bg-gray-50">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <?php echo e(++$i); ?>

                </td>
                <td class="px-6 py-4">
                    <img src="/image/<?php echo e($product->image); ?>" width="100px">
                </td>
                <td class="px-6 py-4">
                    <?php echo e($product->name); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($product->description); ?>

                </td>
                <td class="px-6 py-3">
                    <a class="bg-green-500 py-1 px-3 rounded-lg text-white font-semibold"
                        href="<?php echo e(route('products.show',$product->id)); ?>">Show</a>
                </td>
                <td class="px-6 py-3">
                    <a class="bg-blue-500 py-1 px-3 rounded-lg text-white font-semibold"
                        href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
                </td>
                <td class="px-6 py-3">
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="delete"
                        class="bg-red-500 py-1 px-3 rounded-lg text-white font-semibold">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $products->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/user/Documents/uas-web/laravel/resources/views/products/index.blade.php ENDPATH**/ ?>