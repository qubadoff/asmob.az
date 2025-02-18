@extends('Frontend.layouts.app')


@section('title')
    Ana Səhifə
@endsection

@section('content')
    <!--hero section start-->
    <section class="hero-section ptb-120 d-flex align-items-center justify-content-center overflow-hidden" data-background="{{ url('/assets') }}/images/bg/hero-bg.jpg">
        <div class="container position-relative">
            <div class="hero-vertical-slider">
                @forelse(slider() as $slide)
                    <div class="single-item">
                        <img src="{{ url('/storage/' . $slide->image) }}" alt="not found" class="img-fluid" />
                    </div>
                @empty
                    <p>Not Found</p>
                @endforelse
            </div>
            <div class="hero-main-slider">
                @forelse(slider() as $slide)
                    <div class="hero-single-slide">
                        <div class="row g-5 align-items-center justify-content-between">
                            <div class="col-xl-6 col-lg-9">
                                <div class="hero-content-wrapper">
                                    <h1 class="hero-title mb-40">{{ $slide->name }}</h1>
                                    <a href="{{ route("ourProjects") }}" class="template-btn white-btn">Ətraflı məlumat</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9">
                                <div class="hero-images text-end position-relative">
                                    <img src="{{ url('/storage/' . $slide->image ) }}" alt="not found" class="img-fluid position-absolute start-0 bottom-0 image-2">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Not Found</p>
                @endforelse
            </div>
        </div>
    </section>
    <!--hero section end-->


    <!--collection section start-->
    <section class="collection-section ptb-140">
        <div class="container">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title">
                        <h2 class="mb-0">Layihələr</h2>
                    </div>
                </div>
            </div>
            <!-- Kategori filtreleme butonları -->
            <div class="filter-nav vr-filter-btns mt-40">
                <button data-filter="*" class="filter-btn active">Bütün layihələr</button>
                @foreach(projects() as $categoryName => $projects)
                    <button data-filter=".{{ Str::slug($categoryName) }}" class="filter-btn">{{ $categoryName }}</button>
                @endforeach
            </div>

            <!-- Projeler -->
            <div class="row grid_1 g-4">
                @foreach(projects() as $categoryName => $projects)
                    <div class="col-xl-5 col-lg-6 stools tables rugs {{ Str::slug($categoryName) }}">
                        @foreach($projects as $project)
                            <div class="vr-product-card wow fadeInUp">
                                <div class="feature-thumb position-relative">
                                    <a href="{{ route("singleOurProjects", ['id' => $project->id]) }}">
                                        @if(isset($project->images[0]))
                                            <img src="{{ url('/storage/' . $project->images[0]) }}" alt="thumbnail" class="img-fluid" />
                                        @endif
                                    </a>
                                </div>
                                <div class="card-bottom mt-30">
                                    <a href="{{ route("singleOurProjects", ['id' => $project->id]) }}"><h5>{{ $project->name }}</h5></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <script>
                document.querySelectorAll('.filter-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                        this.classList.add('active');
                        const filterValue = this.getAttribute('data-filter');
                        const items = document.querySelectorAll('.grid_1 .col-xl-5');
                        items.forEach(item => {
                            if (item.classList.contains(filterValue.substring(1)) || filterValue === '*') {
                                item.style.display = '';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    });
                });
            </script>
        </div>
    </section>
    <!--collection section end-->

    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                const filterValue = this.getAttribute('data-filter');
                const items = document.querySelectorAll('.grid_1 .col-xl-5');
                items.forEach(item => {
                    if (item.classList.contains(filterValue.substring(1)) || filterValue === '*') {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>


    <!--ticker section start-->
    <div class="ticker-area overflow-hidden">
        <div class="ticker-wrapper primary-bg-color">
            <div class="ticker">
                <span class="text-white text-uppercase">Get 20% Discount on your first product</span>
                <span class="text-white text-uppercase">DISCOVER LATEST COLLECTIONS AND TOP DESIGNERS </span>
                <span class="text-white text-uppercase">10% DISCOUNT FOR REGISTERED USERS</span>
                <span class="text-white text-uppercase">Get 20% Discount on your first product</span>
                <span class="text-white text-uppercase">DISCOVER LATEST COLLECTIONS AND TOP DESIGNERS</span>
                <span class="text-white text-uppercase">10% DISCOUNT FOR REGISTERED USERS</span>
            </div>
        </div>
    </div>
    <!--ticker section end-->

    <!--blog section start-->
    <section class="blog-section ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section-title">
                        <h2 class="mb-32">Son yeniliklər</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                @forelse(news() as $news)
                    <div class="col-xl-4 col-md-6">
                        <article class="blog-card wow fadeInUp">
                            <div class="feature-image overflow-hidden">
                                <a href="{{ route("news", ['id' => $news->id]) }}"><img src="{{ url('/') }}/storage/{{ $news['images'] }}" alt="feature img" class="img-fluid" /></a>
                            </div>
                            <div class="blog-meta mt-30 mb-30 d-flex align-items-center gap-30">
                                <span class="fw-medium"><i class="fa-regular fa-calendar me-2"></i>{{ \Carbon\Carbon::parse($news->created_at)->format('d.m.Y') }}</span>
                            </div>
                            <a href="{{ route("news", ['id' => $news->id]) }}" class="blog-title"><h5 class="mb-40 fw-semibold">
                                    {{ $news->title }}
                                </h5></a>
                            <a href="{{ route("news", ['id' => $news->id]) }}" class="explore-btn">Ətraflı məlumat</a>
                        </article>
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>
    </section>
    <!--blog section end-->
@endsection
