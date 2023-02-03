<!DOCTYPE html>

<html>

<head>
<title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<nav class="fixed w-full z-10">
    @yield('navbar')
</nav>

<div class="container mx-auto pt-14">
    @yield('content')
</div>
    <div class="pt-24">
    @yield('footer')
    </div>
</body>

</html>