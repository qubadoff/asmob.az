<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

<div class="container py-5">
    <h1 class="mb-4 text-center">{{ $project->name }}</h1>

    @if($categories->isNotEmpty())
        <!-- Kategori Butonları -->
        <div class="d-flex flex-wrap justify-content-center mb-4 gap-2" id="categoryList">
            @foreach($categories as $category)
                <div class="btn btn-outline-primary category-item" data-category-id="{{ $category->id }}">
                    {{ $category->name }} ({{ $category->image_count }})
                </div>
            @endforeach
        </div>

        <!-- Galeri Grid -->
        <div class="row gallery-grid" id="galleryGrid">
            @php $firstCategoryId = $categories->first()->id; @endphp
            @foreach($galleries->where('project_category_id', $firstCategoryId) as $item)
                @foreach($item->images ?? [] as $image)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <img src="{{ asset('storage/' . $image) }}" class="img-fluid shadow-sm" alt="Gallery image">
                    </div>
                @endforeach
            @endforeach
        </div>
    @else
        <p class="text-center no-data">Bu projeye ait kategori veya görsel bulunamadı.</p>
    @endif
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const galleries = @json($galleries);
    const galleryGrid = document.getElementById('galleryGrid');
    const categoryItems = document.querySelectorAll('.category-item');

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
                            <img src="/storage/${image}" class="img-fluid shadow-sm" alt="Image">
                        </div>`;
                });
            });

            galleryGrid.innerHTML = html;
        });
    });

    if (categoryItems.length > 0) {
        categoryItems[0].classList.add('active');
    }
</script>

</body>
</html>
