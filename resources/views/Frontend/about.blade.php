@extends('Frontend.layouts.app')

@section('title', 'Haqqımızda')

@section('content')
    <!-- Hero Section Image -->
    <div class="hero-section">
        <img src="{{ url('/') }}/assets/roomofc.jpeg" alt="Contact Us" class="hero-image" />
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>
                    Haqqımızda
                </h1>
            </div>
        </div>
    </div>

    <!-- Google Map Section -->
    <div class="contact-container">
        <div class="about-hero-img-container">
            <img src="{{ url('/') }}/assets/roomofc.jpeg" alt="" />
        </div>

        <div class="about-content">
            <!-- Contact Info & Form -->
            <h3>Şirkət haqqında</h3><br/>
            <p>
                ASMOB – 25 illik təcrübə, innovasiya və keyfiyyətin təcəssümü! <br/>

                ASMOB mebel sənayesində yüksək keyfiyyət və yenilikçi yanaşması ilə seçilən brenddir. Biz otellər, restoranlar, iş mərkəzləri və premium mənzillər üçün dəmir, taxta və yumşaq materiallardan möhkəm və estetik mebellər istehsal edirik. <br/>

                Məqsədimiz – müştərilərimizin ehtiyaclarını qarşılamaq və onlara funksional, rahat və uzunömürlü mebellər təqdim etməkdir. Hər bir məhsulumuz dəqiqlik və peşəkarlıqla hazırlanır, müştərilərimizin təqdim etdiyi dizaynlara əsasən istehsal edilir. <br/>

                ✔ İstədiyiniz dizaynda mebel istehsalı – Biz müştərilərimizin təqdim etdiyi dizayn əsasında yüksək keyfiyyətli və dayanıqlı mebellər istehsal edirik. <br/>
                ✔ 500-dən çox məmnun müştəri – Otellər, restoranlar və biznes sahibləri ASMOB-u keyfiyyət və etibarlılığa görə seçir. <br/>
                ✔ Tam peşəkar xidmət – İstehsaldan quraşdırmaya qədər hər mərhələdə sizə uyğun həllər təklif edirik. <br/>
                ✔ 7/24 dəstək – Müştərilərimizin istənilən sualını operativ şəkildə cavablandırmağa hazırıq. <br/>

                ASMOB olaraq, güvən və keyfiyyəti əsas prinsipimiz kimi qoruyur və daim müştərilərimiz üçün ən yaxşısını təqdim edirik. <br/>
            </p>
        </div>
    </div>
@endsection
