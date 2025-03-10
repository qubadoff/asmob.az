<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->name }}</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body class="dark-background">

<!-- Geri dön butonu -->
<button onclick="window.history.back()" class="close-button">&times;</button>

<!-- Proje Detayları -->
<div class="image-details-container">
    <h1 id="imageTitle" class="image-title">{{ $data->name }}</h1>
    <p id="imageCategory" class="image-category">Kategori: {{ $data->category->name }}</p>
    <p id="imageOtherCategory" class="image-category">Diğer Kategori: {{ $data->otherCategory->name ?? 'Belirtilmemiş' }}</p>
    <p id="imageDescription" class="image-description">{{ $data->description }}</p>

    <!-- Görsel ve Navigasyon -->
    <div class="image-navigation">
        <button id="prevProject" class="nav-button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <img id="imageDisplay" src="{{ url('/storage/' . $data->images[0]) }}" class="image-display" alt="Proje Görseli" />
        <button id="nextProject" class="nav-button">
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
    document.addEventListener("DOMContentLoaded", function () {
        let projects = @json($projects); // Tüm projeler
        let currentProjectId = {{ $data->id }}; // Şu anki proje
        let currentIndex = projects.findIndex(p => p.id === currentProjectId); // Şu anki projenin index'i

        console.log('Projeler:', projects);
        console.log('Başlangıç Index:', currentIndex);

        // Proje Bilgilerini Güncelleme Fonksiyonu
        function updateProject(index) {
            let project = projects[index];
            console.log('Geçilen Proje:', project);

            // Metin içeriklerini güncelle
            document.getElementById('imageTitle').innerText = project.name;
            document.getElementById('imageCategory').innerText = "Kategori: " + (project.category?.name || 'Belirtilmemiş');
            document.getElementById('imageOtherCategory').innerText = "Diğer Kategori: " + (project.other_category?.name || 'Belirtilmemiş');
            document.getElementById('imageDescription').innerText = project.description;

            // Görsel güncelle (eğer varsa)
            let imageElement = document.getElementById('imageDisplay');
            if (project.images && project.images.length > 0 && project.images[0]) {
                let imageUrl = "/storage/" + project.images[0];
                console.log('Yeni Görsel:', imageUrl);
                imageElement.src = imageUrl + '?v=' + new Date().getTime(); // Cache kır
            } else {
                console.log('Varsayılan Görsel Kullanıldı');
                imageElement.src = "/assets/default-image.jpg"; // Varsayılan resim
            }
        }

        // Sol tuş (önceki proje)
        document.getElementById("prevProject").addEventListener("click", function () {
            currentIndex = (currentIndex - 1 + projects.length) % projects.length;
            updateProject(currentIndex);
        });

        // Sağ tuş (sonraki proje)
        document.getElementById("nextProject").addEventListener("click", function () {
            currentIndex = (currentIndex + 1) % projects.length;
            updateProject(currentIndex);
        });
    });
</script>

<script src="{{ asset('/') }}assets/loader.js"></script>
</body>
</html>
