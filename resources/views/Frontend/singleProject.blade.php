<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .category-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .category-item {
            padding: 8px 16px;
            background: #f5f5f5;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.2s;
        }
        .category-item.active {
            background: #007bff;
            color: white;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .gallery-grid img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h2>{{ $project->name }}</h2>

@if($categories->isNotEmpty())
    <div class="category-list" id="categoryList">
        @foreach($categories as $category)
            <div class="category-item" data-category-id="{{ $category->id }}">
                {{ $category->name }} ({{ $category->image_count }})
            </div>
        @endforeach
    </div>

    <div class="gallery-grid" id="galleryGrid">
        @foreach($galleries->where('project_category_id', $categories->first()->id) as $item)
            @foreach($item->images as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="Gallery image">
            @endforeach
        @endforeach
    </div>
@else
    <p>Bu projeye ait kategori veya görsel bulunamadı.</p>
@endif

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
                gallery.images.forEach(image => {
                    html += `<img src="/storage/${image}" alt="Image">`;
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
