<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ $data->name }}
    </title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body class="dark-background">
<button onclick="window.history.back()" class="close-button">
    &times;
</button>

<div class="image-details-container">
    <h1 id="imageTitle" class="image-title">{{ $data->name }}</h1>
    <p id="imageCategory" class="image-category">{{ $data->category->name }}</p>
    <p id="imageDescription" class="image-description">
        {{ $data->description }}
    </p>

    <div class="image-navigation">
        <button id="prevImage" class="nav-button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <img
            id="imageDisplay"
            src="{{ url('/storage/' . $data->images[0]) }}"
            class="image-display" style="width: 100%; height: 100%;"  alt=""/>
        <button id="nextImage" class="nav-button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</div>

<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="spinner"></div>
</div>

<script src="{{ asset('/') }}script.js"></script>
<script src="{{ asset('/') }}assets/imageDetail.js"></script>
<script src="{{ asset('/') }}assets/loader.js"></script>
</body>
</html>
