<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ url('/') }}/assets/style.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body>
@include('Frontend.layouts.includes.header')

@yield('content')

@include('Frontend.layouts.includes.footer')

<div
    id="preloader"
    class="fixed inset-0 flex justify-center items-center bg-white z-50">
    <div
        class="animate-spin h-12 w-12 border-4 border-yellow-500 border-t-transparent rounded-full"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{ url('/') }}/assets/index.js"></script>
<script src="{{ url('/') }}/assets/loader.js"></script>
</body>
</html>
