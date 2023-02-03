@extends('products.layout')

@section('navbar')
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
@endsection

@section('content')
<div class="flex justify-between pt-10">
    <h1 class="text-xl font-semibold my-5">Data Produk</h1>
    <div>
        <a class="py-1 px-5 bg-red-500 rounded-lg text-white" href="{{ route('products.index') }}">Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Masukkan isian yang kosong</strong><br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li class="">*{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="w-full bg-white border border-gray-200 rounded-lg shadow p-24">

<div class="container mx-auto">
    <form class="w-[500px]" form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
</div>
@endsection

@section('footer')
<footer class="p-4 bg-white shadow md:flex md:items-center md:justify-between w-full">
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
@stop