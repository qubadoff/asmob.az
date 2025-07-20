<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }}</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- GLightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .category-item {
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .category-item.active {
            background-color: #0d6efd;
            color: white !important;
        }

        .gallery-grid img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }

        .gallery-grid img:hover {
            transform: scale(1.03);
        }

        .no-data {
            color: #888;
            font-size: 16px;
        }
    </style>
</head>
<body>

<style>
    .back-button {
        position: relative;
        margin-bottom: 20px;
    }

    @media (min-width: 576px) {
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1050;
            margin-bottom: 0;
        }

        .header-wrapper {
            padding-top: 60px; /* Butona çarpmasın */
        }
    }
</style>

<!-- Geri Dön Butonu -->
<a href="{{ route('index') }}"
   class="btn btn-outline-secondary back-button d-flex align-items-center shadow-sm">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
              d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
    </svg>
    Ana səhifə
</a>


<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">{{ $project->name }}</h1>
        @if($project->description)
            <p class="lead text-muted mt-3">{{ $project->description }}</p>
        @endif
    </div>


    @if($categories->isNotEmpty())
        <!-- Kategoriler -->
        <div class="d-flex flex-wrap justify-content-center mb-4 gap-2" id="categoryList">
            @foreach($categories as $category)
                <div class="btn btn-outline-primary category-item" data-category-id="{{ $category->id }}">
                    {{ $category->name }} ({{ $category->image_count }})
                </div>
            @endforeach
        </div>

        <!-- Galeri -->
        <div class="row gallery-grid" id="galleryGrid">
            @php $firstCategoryId = $categories->first()->id; @endphp
            @foreach($galleries->where('project_category_id', $firstCategoryId) as $item)
                @foreach($item->images ?? [] as $image)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="{{ asset('storage/' . $image) }}" class="glightbox" data-gallery="project-gallery">
                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid shadow-sm" alt="Gallery image">
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    @else
        <p class="text-center no-data">Məlumat tapılmadı !</p>
    @endif
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
    const galleries = @json($galleries);
    const galleryGrid = document.getElementById('galleryGrid');
    const categoryItems = document.querySelectorAll('.category-item');

    const loadLightbox = () => {
        if (window.lightbox) {
            window.lightbox.destroy();
        }
        window.lightbox = GLightbox({
            selector: '.glightbox',
        });
    }

    // Başlangıçta aktif kategori
    if (categoryItems.length > 0) {
        categoryItems[0].classList.add('active');
        loadLightbox();
    }

    categoryItems.forEach(item => {
        item.addEventListener('click', () => {
            categoryItems.forEach(el => el.classList.remove('active'));
            item.classList.add('active');

            const categoryId = item.getAttribute('data-category-id');
            const filtered = galleries.filter(g => g.project_category_id == categoryId);

            let html = '';
            filtered.forEach(gallery => {
                (gallery.images || []).forEach(image => {
                    html += `
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <a href="/storage/${image}" class="glightbox" data-gallery="project-gallery">
                                <img src="/storage/${image}" class="img-fluid shadow-sm" alt="Image">
                            </a>
                        </div>`;
                });
            });

            galleryGrid.innerHTML = html;
            loadLightbox();
        });
    });
</script>

</body>
</html>
