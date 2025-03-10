<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags ve diğer başlık içeriği aynı kalır -->
    <title>{{ $data->name }}</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body class="dark-background">
<!-- Aynı geri düğmesi -->
<button onclick="window.history.back()" class="close-button">&times;</button>

<div class="image-details-container">
    <!-- Aynı başlık ve açıklamalar -->
    <h1 class="image-title">{{ $data->name }}</h1>
    <p class="image-category">{{ $data->category->name }}</p>
    <p class="image-description">{{ $data->description }}</p>

    <!-- Görüntü navigasyonu -->
    <div class="image-navigation">
        <button id="prevImage" class="nav-button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <img
            id="imageDisplay"
            src="{{ url('/storage/' . $data->images[0]) }}"
            class="image-display"
            alt=""
            data-images="{{ json_encode(array_map(function($img) { return url('/storage/' . $img); }, $data->images)) }}"
        />
        <button id="nextImage" class="nav-button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</div>

<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="spinner"></div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageDisplay = document.getElementById('imageDisplay');
        const prevButton = document.getElementById('prevImage');
        const nextButton = document.getElementById('nextImage');
        const preloader = document.getElementById('preloader');
        const images = JSON.parse(imageDisplay.dataset.images);
        let currentIndex = 0;

        // Tek görüntü durumunda düğmeleri gizle
        if(images.length <= 1) {
            prevButton.style.display = 'none';
            nextButton.style.display = 'none';
        }

        function updateImage(newIndex) {
            preloader.style.display = 'flex';
            currentIndex = newIndex;
            imageDisplay.src = images[currentIndex];
        }

        imageDisplay.addEventListener('load', () =>
            preloader.style.display = 'none');

        prevButton.addEventListener('click', () => {
            const newIndex = (currentIndex - 1 + images.length) % images.length;
            updateImage(newIndex);
        });

        nextButton.addEventListener('click', () => {
            const newIndex = (currentIndex + 1) % images.length;
            updateImage(newIndex);
        });
    });
</script>
</body>
</html>
