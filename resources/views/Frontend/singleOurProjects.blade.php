<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body class="dark-background" style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #222; color: #fff;">

<!-- Geri dön butonu -->
<button onclick="window.history.back()" style="position: fixed; top: 10px; right: 10px; background: transparent; border: none; font-size: 40px; color: white; cursor: pointer;">&times;</button>

<!-- Proje Detayları -->
<div style="max-width: 900px; margin: 50px auto; padding: 20px; text-align: center;">
    <h1 id="imageTitle" style="margin-bottom: 10px;">{{ $data->name }}</h1>
    <p id="imageCategory" style="margin: 5px 0;">Kategori: {{ $data->category->name }}</p>
    <p id="imageOtherCategory" style="margin: 5px 0;">Diğer Kategori: {{ $data->otherCategory->name ?? 'Belirtilmemiş' }}</p>
    <p id="imageDescription" style="margin: 15px 0; font-size: 14px; color: #ccc;">{{ $data->description }}</p>

    <!-- Görsel ve Navigasyon -->
    <div style="position: relative; display: flex; align-items: center; justify-content: center; margin: 20px auto; max-width: 100%;">
        <button id="prevProject" style="
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
        ">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <img id="imageDisplay" src="{{ url('/storage/' . $data->images[0]) }}" alt="Proje Görseli" style="
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
            object-fit: cover;
            max-height: 500px;
        ">

        <button id="nextProject" style="
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
        ">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let projects = @json($projects);
        let currentProjectId = {{ $data->id }};
        let currentIndex = projects.findIndex(p => p.id === currentProjectId);

        console.log('Projeler:', projects);
        console.log('Başlangıç Index:', currentIndex);

        function updateProject(index) {
            let project = projects[index];
            console.log('Geçilen Proje:', project);

            document.getElementById('imageTitle').innerText = project.name;
            document.getElementById('imageCategory').innerText = "Kategori: " + (project.category?.name || 'Belirtilmemiş');
            document.getElementById('imageOtherCategory').innerText = "Diğer Kategori: " + (project.other_category?.name || 'Belirtilmemiş');
            document.getElementById('imageDescription').innerText = project.description;

            let imageElement = document.getElementById('imageDisplay');
            if (project.images && project.images.length > 0 && project.images[0]) {
                let imageUrl = "/storage/" + project.images[0];
                console.log('Yeni Görsel:', imageUrl);
                imageElement.src = imageUrl + '?v=' + new Date().getTime();
            } else {
                imageElement.src = "/assets/default-image.jpg";
            }
        }

        document.getElementById("prevProject").addEventListener("click", function () {
            currentIndex = (currentIndex - 1 + projects.length) % projects.length;
            updateProject(currentIndex);
        });

        document.getElementById("nextProject").addEventListener("click", function () {
            currentIndex = (currentIndex + 1) % projects.length;
            updateProject(currentIndex);
        });
    });
</script>

</body>
</html>
