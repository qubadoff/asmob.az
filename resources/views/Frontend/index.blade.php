@php use App\Models\Partner; @endphp
@extends('Frontend.layouts.app')

@section('title')
    Ana səhifə
@endsection


@section('content')
    <main style="width: 100%; margin: 0">
        <!-- Carousel or Slider -->
        <!-- Carousel Container -->
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
             style="width: 100%; height: 100%">

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                @forelse(slider() as $index => $slider)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                            class="{{ $loop->first ? 'active' : '' }}"
                            aria-current="{{ $loop->first ? 'true' : 'false' }}"
                            aria-label="Slide {{ $index + 1 }}"
                            style="width: 12px; height: 12px; border: 3px solid #e5e5e5; border-radius: 50%; background-image: linear-gradient(rgb(153, 153, 153) 0%, rgb(225, 225, 225) 100%); background-color: transparent;">
                    </button>
                @empty
                    <p class="text-white">No slides available</p>
                @endforelse
            </div>

            <!-- Carousel İçeriği -->
            <div class="carousel-inner" style="width: 100%; height: 100%">
                @forelse(slider() as $index => $slider)
                    <div class="carousel-item position-relative w-100 h-100 {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ url('/storage/' . $slider->image) }}" class="d-block w-100 h-100"
                             alt="{{ $slider->name }}" style="object-fit: cover">
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                        <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center"
                             style="font-family: 'Ubuntu', sans-serif">
                            <h5 class="text-uppercase animate__animated animate__fadeInDown"
                                style="line-height: 80px; color: #fff; font-size: 48px; font-weight: 400; letter-spacing: 2px;">
                                {{ $slider->name }}
                            </h5>
                            <p class="text-uppercase animate__animated animate__fadeIn animate__delay-2s"
                               style="color: #fff; font-size: 50px; font-weight: 700; letter-spacing: 2px;">
                                {{ $slider->description }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class="text-white text-center">No slides available</p>
                @endforelse
            </div>

            <!-- Önceki ve Sonraki Butonlar (Düzgün Çalışan Versiyon) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Nav -->


        <!-- Why choose us -->
        <div style="
    width: 100%;
    display: flex;
    justify-content: center;
    padding-top: 80px;
    padding-bottom: 40px;
    margin: 0;
    line-height: 20px;">

            <div class="why_choose_us_container" style="
        width: 1170px;
        display: flex;
        justify-content: space-between;
        padding-left: 15px;
        padding-right: 15px;">

                <div class="why_choose_us_container_top" style="width: 70%">
                    <div class="top_1">
                        <h5 style="
                    text-transform: uppercase;
                    font-size: 34px;
                    margin-bottom: 15px;
                    line-height: 45px;
                    letter-spacing: 0.5px;
                    font-weight: 700;
                    color: #222;
                    font-family: Montserrat, sans-serif;">
                            <span style="color: #e5ae49">Bizi</span> niyə seçməlisiniz?
                        </h5>
                        <p style="
                    color: #666;
                    font-size: 14px;
                    font-weight: 300;
                    line-height: 24px;
                    letter-spacing: 0.5px;
                    margin-bottom: 10px;
                    padding-right: 225px;
                    font-family: Ubuntu, sans-serif;">
                            Biz interyer dizayn və tikinti sahəsində illərin təcrübəsinə sahibik.
                            Peşəkar komandamız hər müştərinin ehtiyaclarını nəzərə alaraq fərdi yanaşma tətbiq edir.
                            Sizin üçün ən keyfiyyətli və estetik məkanları yaratmaq bizim əsas missiyamızdır.
                        </p>
                    </div>

                    <div class="top_2" style="display: flex; justify-content: space-between; padding-right: 50px;">

                        <div>
                            <div style="opacity: 1; padding-top: 43px">
                                <i class="fa-solid fa-pen-ruler" style="color: #e5ae49; font-size: 32px"></i>
                                <h5 style="
                            padding-top: 3px;
                            margin-bottom: 12px;
                            font-size: 14px;
                            font-weight: 400;
                            font-family: Montserrat, sans-serif;
                            text-transform: uppercase;
                            color: #222;">
                                    Peşəkar interyer dizayn
                                </h5>
                                <p style="width: 30px; height: 2px; background-color: #e5ae49;"></p>
                                <p style="line-height: 25px; letter-spacing: 0.5px; font-size: 14px; font-weight: 300; color: #666; font-family: Ubuntu, sans-serif;">
                                    Müasir və unikal dizayn yanaşmamız ilə məkanınıza fərqlilik qatırıq.
                                    Sizə xüsusi və rahat atmosfer yaradırıq.
                                </p>
                            </div>

                            <div style="opacity: 1; padding-top: 43px">
                                <i class="fa-solid fa-chart-line" style="color: #e5ae49; font-size: 32px"></i>
                                <h5 style="
                            padding-top: 3px;
                            margin-bottom: 12px;
                            font-weight: 400;
                            font-size: 14px;
                            font-family: Montserrat, sans-serif;
                            text-transform: uppercase;
                            color: #222;">
                                    Tam peşəkar xidmət
                                </h5>
                                <p style="width: 30px; height: 2px; background-color: #e5ae49;"></p>
                                <p style="line-height: 25px; letter-spacing: 0.5px; font-size: 14px; font-weight: 300; color: #666; font-family: Ubuntu, sans-serif;">
                                    Layihənin hər mərhələsində tam dəstək göstəririk.
                                    Dizayndan icraya qədər hər şeyi bizə etibar edin.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div style="opacity: 1; padding-top: 43px">
                                <i class="fa-regular fa-face-smile" style="color: #e5ae49; font-size: 32px"></i>
                                <h5 style="
                            padding-top: 3px;
                            margin-bottom: 12px;
                            font-weight: 400;
                            font-size: 14px;
                            font-family: Montserrat, sans-serif;
                            text-transform: uppercase;
                            color: #222;">
                                    500-dən çox məmnun müştəri
                                </h5>
                                <p style="width: 30px; height: 2px; background-color: #e5ae49;"></p>
                                <p style="line-height: 25px; letter-spacing: 0.5px; font-size: 14px; font-weight: 300; color: #666; font-family: Ubuntu, sans-serif;">
                                    Müştəri məmnuniyyəti bizim üçün ən vacib prioritetdir.
                                    Xidmətlərimizlə 500-dən çox müştəriyə xoşbəxtlik bəxş etmişik.
                                </p>
                            </div>

                            <div style="opacity: 1; padding-top: 43px">
                                <i class="fa-regular fa-clock" style="color: #e5ae49; font-size: 32px"></i>
                                <h5 style="
                            padding-top: 3px;
                            margin-bottom: 12px;
                            font-weight: 400;
                            font-size: 14px;
                            font-family: Montserrat, sans-serif;
                            text-transform: uppercase;
                            color: #222;">
                                    24/7 Dəstək
                                </h5>
                                <p style="width: 30px; height: 2px; background-color: #e5ae49;"></p>
                                <p style="line-height: 25px; letter-spacing: 0.5px; font-size: 14px; font-weight: 300; color: #666; font-family: Ubuntu, sans-serif;">
                                    Gecə-gündüz sizə kömək etməyə hazırıq.
                                    Mütəxəssislərimiz 24/7 sizin xidmətinizdədir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="why_choose_us_container_bottom" style="width: 30%">
                    <img src="{{ asset('assets/images/chooseusbg.png') }}" alt="Bizi niyə seçməlisiniz?"
                         style="width: 100%; height: 100%; object-fit: cover"/>
                </div>
            </div>
        </div>

        <!-- Featured Works -->


        <div class="featured_works" style="
    width: 100%;
    background-color: #f9f9f9;
    padding: 70px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">

            <!-- Başlık ve Açıklama -->
            <div style="margin-bottom: 35px; text-align: center;">
                <h5 style="
            text-transform: uppercase;
            color: #222;
            font-size: 34px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 45px;
            letter-spacing: 0.5px;
            margin-bottom: 15px;">
                    <span style="color: #e5ae49">Gördüyümüz işlər</span>
                </h5>
            </div>

            <!-- Kategori Butonları -->
            <div class="category-tabs" style="
        display: flex;
        gap: 20px;
        justify-content: center;
        margin-bottom: 20px;">
                <button class="category-btn active" data-category="all" style="
            background: #e5ae49; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 20px;">
                    SHOW ALL
                </button>

                @forelse(projects() as $categoryName => $projects)
                    <button class="category-btn" data-category="{{ Str::slug($categoryName) }}" style="
                background: #fff; color: #222; padding: 10px 20px; border: 1px solid #222; cursor: pointer; border-radius: 20px;">
                        {{ strtoupper($categoryName) }}
                    </button>
                @empty
                    <p style="color: #666; font-size: 16px; text-align: center;">No projects available.</p>
                @endforelse
            </div>

            <!-- Projeler Grid Yapısında -->
            <div class="projects-container" style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        width: 90%;
        max-width: 1200px;
        justify-content: center;">

                @forelse(projects() as $categoryName => $projects)
                    @forelse($projects as $project)
                        @php
                            $imagesArray = is_array($project->images) ? $project->images : json_decode($project->images, true);
                            $firstImage = (!empty($imagesArray) && is_array($imagesArray)) ? $imagesArray[0] : 'default.jpg';
                        @endphp

                        <div class="project-item" data-category="{{ Str::slug($categoryName) }}" style="
                            position: relative;
                            overflow: hidden;
                            border-radius: 10px;
                            transition: all 0.3s ease;">

                            <a href="{{ route("singleOurProjects", ['id' => $project->id]) }}">
                                <img src="{{ asset('storage/' . $firstImage) }}" alt="{{ $project->name }}" style="
                                width: 100%;
                                height: auto;
                                object-fit: cover;
                                transition: all 0.3s ease;">
                            </a>

                            <div style="
                                position: absolute;
                                bottom: 10px;
                                left: 0;
                                width: 100%;
                                background: rgba(0, 0, 0, 0.6);
                                color: white;
                                text-align: center;
                                padding: 10px;
                                font-size: 14px;
                                font-weight: 600;
                                text-transform: uppercase;">
                                        <a href="{{ route("singleOurProjects", ['id' => $project->id]) }}">
                                            {{ $project->name }}
                                        </a>
                            </div>
                        </div>
                    @empty
                        <p style="color: #666; font-size: 16px; text-align: center; width: 100%;">No projects found in
                            this category.</p>
                    @endforelse
                @empty
                    <p style="color: #666; font-size: 16px; text-align: center; width: 100%;">No projects available.</p>
                @endforelse
            </div>

            <!-- Daha Fazla Proje Butonu -->
            <div class="more_button" style="display: flex; justify-content: center; margin-top: 30px;">
                <a href="{{ route('ourProjects') }}" style="
            transition: all 0.3s linear;
            font-family: Montserrat, sans-serif;
            display: inline-block;
            text-transform: uppercase;
            padding: 10px 30px;
            text-align: center;
            border: 1px solid rgb(34, 34, 34);
            border-radius: 25px;
            font-size: 13px;
            font-weight: 400;
            line-height: 18px;
            letter-spacing: 1px;
            color: rgb(34, 34, 34);">
                    Daha Çox Layihə
                </a>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const buttons = document.querySelectorAll(".category-btn");
                const projects = document.querySelectorAll(".project-item");

                buttons.forEach(button => {
                    button.addEventListener("click", function () {
                        // Aktif class-ı değiştir
                        buttons.forEach(btn => {
                            btn.classList.remove("active");
                            btn.style.background = "#fff";
                            btn.style.color = "#222";
                        });

                        this.classList.add("active");
                        this.style.background = "#e5ae49";
                        this.style.color = "#fff";

                        let selectedCategory = this.getAttribute("data-category");

                        projects.forEach(project => {
                            if (selectedCategory === "all" || project.getAttribute("data-category") === selectedCategory) {
                                project.style.display = "block";
                            } else {
                                project.style.display = "none";
                            }
                        });
                    });
                });
            });
        </script>


        <!-- Recent News -->

        <div style="width: 100%">
            <div
                class="recent_news_top"
                style="padding-top: 89px; padding-bottom: 55px"
            >
                <h5
                    style="
              text-align: center;
              text-transform: uppercase;
              color: #222;
              font-size: 34px;
              font-family: Montserrat, sans-serif;
              font-weight: 700;
              line-height: 45px;
              letter-spacing: 0.5px;
              margin-bottom: 15px;
            "
                >
                    <span style="color: #e5ae49">Ən son</span> xəbərlər
                </h5>
            </div>
            <div
                class="recent_news_bottom"
                style="display: flex; justify-content: center; padding-bottom: 85px"
            >
                @forelse(news() as $new)
                    <div
                        class="recent_news_card animate__animated animate__fadeInUp"
                        style="
              opacity: 1;
              width: 380px;
              padding: 0 15px;
              margin-bottom: 40px;
              font-family: 'Montserrat', sans-serif;
            "
                    >
                        <img
                            decoding="async"
                            src="{{ url('/storage/' . $new->images) }}"
                            alt=""
                            style="width: 350px; margin-bottom: 35px"
                        />
                        <div
                            style="
                margin-bottom: 15px;
                color: #333;
                font-size: 14px;
                line-height: 20px;
              "
                        >
              <span
                  style="
                  color: #aaa;
                  font-size: 13px;
                  font-weight: 300;
                  line-height: 18px;
                  font-family: Ubuntu, sans-serif;
                "
              ><i
                      class="fa-solid fa-calendar"
                      style="font-size: 14px; margin-right: 10px; line-height: 14px"
                  ></i>
                {{ date('d.m.Y', strtotime($new->created_at)) }}</span
              >
                        </div>
                        <a
                            href=""
                            style="
                display: inline-block;
                margin-bottom: 25px;
                font-size: 20px;
                font-weight: 700;
                color: #222;
                line-height: 22px;
                text-transform: uppercase;
              "
                        >{{ $new->title }}</a
                        ><br/>
                        <a
                            href=""
                            style="
                color: #aaa;
                font-size: 12px;
                font-weight: 400;
                letter-spacing: 1px;
                line-height: 18px;
                margin-top: 20px;
                text-transform: uppercase;
                transition: all 0.3s ease 0s;
              "
                        >Ətraflı</a
                        >
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>


        <!-- Swiper -->
        <div class="swiper_container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @forelse(Partner::all() as $partner)
                        <div class="swiper-slide">
                            <img src="{{ url('/storage/' . $partner->image) }}" alt=""/>
                        </div>
                    @empty
                        No Data !
                    @endforelse
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <!-- Contact Us -->

        <div
            class=""
            style="
          width: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
        "
        >
            <div
                style="
            width: 100%;
            padding-top: 110px;
            padding-bottom: 323px;
            background: url('assets/images/contactbg.jpg') no-repeat;
            background-color: #ebebeb;
          "
            >
                <h5
                    style="
              text-align: center;
              text-transform: uppercase;
              color: #222;
              font-size: 34px;
              font-family: Montserrat, sans-serif;
              font-weight: 700;
              line-height: 45px;
              letter-spacing: 0.5px;
              margin-bottom: 30px;
            "
                >
                    <span style="color: #e5ae49">Bizimlə Əlaqə</span>
                </h5>
            </div>

            <div
                style="
            width: 85%;
            margin-top: -240px;
            background-color: #fff;
            padding-top: 35px;
            padding-bottom: 35px;
            margin-bottom: 5px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 3px 0px;
          "
            >
                <div
                    class="contact_infos"
                    style="
              width: 100%;
              height: 100%;
              display: flex;
              justify-content: space-between;
              align-items: center;
            "
                >
                    <div
                        class="contact_info"
                        style="width: 380px; height: 35vh; line-height: 20px"
                    >
                        <div
                            style="width: 100%; height: 100%; padding: 35px 7.5px 0 7.5px"
                        >
                            <div
                                class=""
                                style="
                    width: 100%;
                    height: 80px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                            >
                                <img
                                    decoding="async"
                                    src="assets/images/contact1.png"
                                    alt=""
                                    style="width: 64px; height: 42px"
                                />
                            </div>
                            <p
                                class=""
                                style="
                    color: #222;
                    margin-top: 10px;
                    line-height: 25px;
                    letter-spacing: 1px;
                    font-size: 19px;
                    text-align: center;
                    font-family: Montserrat, sans-serif;
                  "
                            >
                                E-mail
                            </p>
                            <p
                                class=""
                                style="
                    color: #666;
                    font: Ubuntu, sans-serif;
                    margin-top: 12px;
                    line-height: 25px;
                    text-align: center;
                    font-weight: 400;
                    font-size: 16px;
                  "
                            >
                                {{ siteSetting()->email }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="contact_info"
                        style="width: 380px; height: 35vh; line-height: 20px"
                    >
                        <div class="" style="width: 100%; padding: 35px 7.5px 0 7.5px">
                            <div
                                class=""
                                style="
                    width: 100%;
                    height: 80px;
                    display: flex;
                    justify-content: center;
                  "
                            >
                                <img
                                    decoding="async"
                                    src="assets/images/contact2.png"
                                    alt=""
                                    style="width: 45px; height: 78px"
                                />
                            </div>
                            <p
                                class=""
                                style="
                    color: #222;
                    margin-top: 10px;
                    line-height: 25px;
                    letter-spacing: 1px;
                    font-size: 19px;
                    text-align: center;
                    font-family: Montserrat, sans-serif;
                  "
                            >
                                Əlaqə nömrəsi
                            </p>
                            <p
                                class=""
                                style="
                    color: #666;
                    font: Ubuntu, sans-serif;
                    margin-top: 12px;
                    line-height: 25px;
                    text-align: center;
                    font-weight: 400;
                    font-size: 16px;
                  "
                            >
                                {{ siteSetting()->phone }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="contact_info"
                        style="width: 380px; height: 35vh; line-height: 20px"
                    >
                        <div
                            class=""
                            style="width: 100%; height: 100%; padding: 35px 7.5px 0 7.5px"
                        >
                            <div
                                class=""
                                style="
                    width: 100%;
                    height: 80px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                            >
                                <img
                                    decoding="async"
                                    src="assets/images/contact3.png"
                                    alt=""
                                    style="width: 77px; height: 62px"
                                />
                            </div>
                            <p
                                class=""
                                style="
                    color: #222;
                    margin-top: 10px;
                    line-height: 25px;
                    letter-spacing: 1px;
                    font-size: 19px;
                    text-align: center;
                    font-family: Montserrat, sans-serif;
                  "
                            >
                                Ünvan
                            </p>
                            <p
                                class=""
                                style="
                    color: #666;
                    font: Ubuntu, sans-serif;
                    margin-top: 12px;
                    line-height: 25px;
                    text-align: center;
                    font-weight: 400;
                    font-size: 16px;
                  "
                            >
                                {{ siteSetting()->location }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
