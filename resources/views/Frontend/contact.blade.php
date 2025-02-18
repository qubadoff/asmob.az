@extends('Frontend.layouts.app')

@section('title')
    Əlaqə
@endsection


@section('content')

    <!--address section start-->
    <section class="address-section pt-140 overflow-hidden">
        <div class="container-1700">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="address-single">
                        <h5 class="mb-50 fw-normal hm2-font-family">Bakı filialı</h5>
                        <div class="footer-address">
                            <a href="tel:{{ siteSetting()->phone }}">{{ siteSetting()->phone }}</a><br>
                            <a href="mailto:{{ siteSetting()->email }}" class="mail">{{ siteSetting()->email }}</a>
                            <p class="mt-32">{{ siteSetting()->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--address section end-->

    <!--contact form section start-->
    <section class="contact-form-section pt-120 pb-140 overflow-hidden">
        <div class="container-1700">
            <div class="row align-items-center g-5">
                <div class="col-xl-7 col-md-6">
                    <div class="google-map-wrapper">
                        <iframe src="{{ siteSetting()->map }}" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="ct-form--wrapper">
                        <h2 class="fs-40 fw-regular hm2-font-family mb-30">
                            Bizə mesaj göndər
                        </h2>
                        <p class="mb-50">
                            Hər hansısa sualınız varsa bizə yazın.
                        </p>
                        <form class="ct-contact-form" action="#">
                            <input type="text" class="theme-input" placeholder="Ad və Soyad">
                            <input type="email" class="theme-input" placeholder="Email">
                            <textarea class="theme-input" placeholder="Mesajınız" rows="6"></textarea>
                            <button type="submit" class="template-btn primary-btn">Göndər</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact form section end-->

@endsection
