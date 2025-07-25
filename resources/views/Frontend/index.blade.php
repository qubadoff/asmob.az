@extends('Frontend.layouts.app')

@section('title', 'Ana səhifə')

@section('content')

    <!-- swiper section -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @forelse(slider() as $slider)
                <div class="swiper-slide">
                    <img src="{{ url('/storage/' . $slider->image) }}" class="slide-image"  alt="{{ $slider->name }}"/>
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h2>{{ $slider->name }}</h2>
                            <p>{{ $slider->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                No Data !
            @endforelse
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- cards under swiper -->

    <div class="card-list-container">
        <div class="card-list">
            <!-- Card 1 -->
            <div class="card-container" data-bg="livingroom">
                <img src="{{ asset('') }}assets/livingroom.svg" class="card-icon" />
                <p>Qonaq Otağı</p>
            </div>

            <!-- Card 2 -->
            <div class="card-container" data-bg="diningroom">
                <img src="{{ asset('') }}assets/diningroom.svg" class="card-icon" />
                <p>Yemək otağı</p>
            </div>

            <!-- Card 3 -->
            <div class="card-container" data-bg="bedroom">
                <img src="{{ asset('') }}assets/bedroom.svg" class="card-icon" />
                <p>Yataq otağı</p>
            </div>

            <!-- Card 4 -->
            <div class="card-container" data-bg="bathroom">
                <img src="{{ asset('') }}assets/bathroom.svg" class="card-icon" />
                <p>Hamam</p>
            </div>

            <!-- Card 5 -->
            <div class="card-container" data-bg="office">
                <img src="{{ asset('') }}assets/office.svg" class="card-icon" />
                <p>Ofis</p>
            </div>

            <!-- Card 6 -->
            <div class="card-container" data-bg="exterior">
                <img src="{{ asset('') }}assets/exterior.svg" class="card-icon" />
                <p>Eksteryer</p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="why-choose-us-container">
        <div class="why-choose-us-content">
            <div class="text-section">
                <div>
            <span class="title"
            ><span class="highlight">
                    Müştərilərimiz Niyə Bizi Seçir?
                </span></span>
                    <p class="description">
                        25 illik təcrübəsi ilə ASMOB mebel sənayesində yenilikçi yanaşması və üstün keyfiyyəti ilə fərqlənir. Biz otellər, restoranlar, iş mərkəzləri və premium mənzillər üçün dəmir, taxta və yumşaq materiallardan yüksək keyfiyyətli mebellər istehsal edirik.
                        <br/>
                        Məqsədimiz – müştərilərimizin gözləntilərini aşan, davamlı və estetik baxımdan mükəmməl mebellər təqdim etməkdir. Hər bir məhsulumuz funksionallıq, rahatlıq və zərifliyi özündə birləşdirir. ASMOB olaraq, güvən və keyfiyyəti əsas prinsipimiz kimi qoruyuruq və bu dəyərlər sayəsində bazarda seçilən brend olmuşuq.

                    </p>
                </div>
                <div class="features-list">
                    <!-- Card 1 -->
                    <div class="feature-card">
                        <img
                            src="{{ asset('') }}assets/pencilAndRuler.svg"
                            class="feature-icon"
                            alt="" />
                        <h6>İstədiyiniz Dizaynda Mebel İstehsalı</h6>
                        <div class="separator"></div>
                        <p>
                            Biz müştərilərimizin təqdim etdiyi dizayn əsasında yüksək keyfiyyətli və dayanıqlı mebellər istehsal edirik. Hər bir məhsul dəqiqlik və peşəkarlıqla hazırlanır, funksionallıq və estetik görünüş ön planda tutulur.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div class="feature-card">
                        <img src="{{ asset('') }}assets/happyface.svg" class="feature-icon" alt="" />
                        <h6>500-dən Çox Məmnun Müştəri</h6>
                        <div class="separator"></div>
                        <p>
                            Bizim üçün müştəri məmnuniyyəti hər şeydən önəmlidir. Keyfiyyətimiz və xidmətimiz sayəsində yüzlərlə otel, restoran və biznes sahibləri ASMOB-u seçir.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div class="feature-card">
                        <img src="{{ asset('') }}assets/presentation.svg" class="feature-icon" alt="" />
                        <h6>Tam Peşəkar Xidmət</h6>
                        <div class="separator"></div>
                        <p>
                            İstehsaldan quraşdırmaya qədər hər mərhələdə peşəkar yanaşma tətbiq edirik. Sizə ən uyğun həlləri təklif edərək məkanınızı ideal şəkildə tərtib edirik.
                        </p>
                    </div>
                    <!-- Card 4 -->
                    <div class="feature-card">
                        <img src="{{ asset('') }}assets/clock.svg" class="feature-icon" alt="" />
                        <h6>7/24 Dəstək</h6>
                        <div class="separator"></div>
                        <p>
                            Müştərilərimizin ehtiyaclarını qarşılamaq üçün hər zaman buradayıq. Xidmət sonrası dəstəyimiz və operativ komandamızla istənilən sualınızı cavablandırmağa hazırıq.
                        </p>
                    </div>
                </div>
            </div>
            <div class="image-section">
                <img src="{{ asset('') }}mott.jpg" alt="" />
            </div>
        </div>
    </div>

    <br/>

    <!-- Featured Works -->
    <div class="featured-works-container">
        <div class="featured-works-header">
            <span class="highlight">Layihələr </span>
        </div>
        <p class="featured-works-description">
            Tamamladığımız ən son layihələr ilə burdan tanış ola bilərsiniz.
        </p>
    </div>

{{--    <div class="filter-section">--}}
{{--        <div class="filter-buttons">--}}
{{--            <div class="filter-btn active" data-category="all">Bütün layihələr</div>--}}
{{--            @foreach (projects() as $categoryName => $items)--}}
{{--                <div class="filter-btn" data-category="{{ Str::slug($categoryName) }}">{{ $categoryName }}</div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="image-gallery" id="imageGallery">
        @foreach (projects() as $project)
            <div class="gallery-container" data-category="1">
                <a href="{{ route("singleProject", ['id' => $project->id]) }}">
                    <img src="{{ asset('storage/' . $project->image) }}" class="gallery-item" data-id="1" alt="" />
                    <div class="gallery-overlay" style="opacity: 1; visibility: visible; position: absolute; bottom: 0; background: rgba(0,0,0,0.5); width: 100%; padding: 10px;">
                        <h1 style="color: whitesmoke; margin: 0; font-size: 20px;">{{ $project->name }}</h1>
                        <p style="color: #ddd; font-size: 14px; margin: 5px 0 0;">{{ $project->description }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


    <div class="featured-works-container">
        <div class="featured-works-header">
            <span class="highlight">Blog yazıları </span>
        </div>
        <p class="featured-works-description">
            Bir sıra mövzülarda olan maraqlı yazılarımız ilə tanış olun
        </p>
    </div>

    <!-- Blog Posts -->
    <div class="main-blog-wrapper">
        <div class="main-blog-container">
            @forelse(news() as $news)
                <div class="main-blog-card">
                    <div class="main-blog-img-container">
                        <img src="{{ url('/storage/' . $news->images) }}" alt="Blog Post Image" />
                    </div>
                    <div class="main-blog-content">
                        <p>
                            <i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($news->created_at)->diffForHumans() }}
                            <i class="fas fa-eye"></i> 176
                        </p>
                        <h2>
                            <a href="{{ route("singleBlog", ['id' => $news->id]) }}">
                                {{ $news->title }}
                            </a>
                        </h2>
                        <p>
                            {{ $news->description }}
                        </p>
                        <a href="{{ route("singleBlog", ['id' => $news->id]) }}">
                            Ətraflı
                        </a>
                    </div>
                </div>
            @empty
                No Data !
            @endforelse
        </div>
    </div>


    <!-- Contact Us Section -->
    <div class="contact-section">
        <div class="contact-header">
            <span class="highlight">Əlaqə </span>
        </div>
        <p class="contact-description">
            Əlaqə məlumatlarımızdan istifadə edərək təklif və istəklərinizi bizə bildirin.
        </p>
    </div>

    <!-- Contact Info Cards -->
    <div class="contact-info-container">
        <!-- Card 1 -->
        <div class="contact-card">
            <div class="icon-container">
                <img src="{{ url('/') }}/assets/Mailimg.png" alt="Email Icon" />
            </div>
            <h6>E-mail</h6>
            <p><a href="mailto: {{ siteSetting()->email }}">{{ siteSetting()->email }}</a> </p>
        </div>

        <!-- Card 2 -->
        <div class="contact-card">
            <div class="icon-container">
                <img src="{{ url('/') }}/assets/callimg.png" alt="Phone Icon" />
            </div>
            <h6>Telefon</h6>
            <p><a href="tel: {{ siteSetting()->phone }}">{{ siteSetting()->phone }}</a> </p>
        </div>

        <!-- Card 3 -->
        <div class="contact-card">
            <div class="icon-container">
                <img src="{{ url('/') }}/assets/locationimg.png" alt="Location Icon" />
            </div>
            <h6>Ünvan</h6>
            <p>{{ siteSetting()->location }}</p>
        </div>
    </div>

    <!-- Mini Swiper Slider -->
    <div class="mini-swiper-container">
        <div class="swiperMini-button-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </div>

        <div class="swiper swiperMini">
            <div class="swiper-wrapper">
                @forelse(partner() as $partner)
                    <div class="swiper-slide">
                        <img src="{{ url('/storage/' . $partner->image) }}" alt="{{ $partner->name }}" />
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>

        <div class="swiperMini-button-next">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>

@endsection
