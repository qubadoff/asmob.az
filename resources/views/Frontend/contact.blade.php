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
                        <h5 class="mb-50 fw-normal hm2-font-family">Berlin</h5>
                        <div class="footer-address">
                            <a href="tel:256-31556.2369">+256-31556.2369</a><br>
                            <a href="mailto:hello@Venturifur.com" class="mail">hello@Venturifur.com</a>
                            <p class="mt-32">219 Geom Street. UYS Office 215 Frankfurt-Germany</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="address-single">
                        <h5 class="mb-50 fw-normal hm2-font-family">Tokyo</h5>
                        <div class="footer-address">
                            <a href="tel:256-31556.2369">+256-31556.2369</a><br>
                            <a href="mailto:hello@Venturifur.com" class="mail">hello@Venturifur.com</a>
                            <p class="mt-32">219 Geom Street. UYS Office 215 Frankfurt-Germany</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="address-single">
                        <h5 class="mb-50 fw-normal hm2-font-family">Paris</h5>
                        <div class="footer-address">
                            <a href="tel:256-31556.2369">+256-31556.2369</a><br>
                            <a href="mailto:hello@Venturifur.com" class="mail">hello@Venturifur.com</a>
                            <p class="mt-32">219 Geom Street. UYS Office 215 Frankfurt-Germany</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="address-single">
                        <h5 class="mb-50 fw-normal hm2-font-family">Dieburg</h5>
                        <div class="footer-address">
                            <a href="tel:256-31556.2369">+256-31556.2369</a><br>
                            <a href="mailto:hello@Venturifur.com" class="mail">hello@Venturifur.com</a>
                            <p class="mt-32">219 Geom Street. UYS Office 215 Frankfurt-Germany</p>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155421.70603781365!2d13.259927382506678!3d52.506938616189004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e373f035901%3A0x42120465b5e3b70!2sBerlin%2C%20Germany!5e0!3m2!1sen!2sbd!4v1689504587526!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="ct-form--wrapper">
                        <h2 class="fs-40 fw-regular hm2-font-family mb-30">Get a Quote</h2>
                        <p class="mb-50">Don't worry, we don't spam your email</p>
                        <form class="ct-contact-form" action="#">
                            <input type="text" class="theme-input" placeholder="Your Name*">
                            <input type="email" class="theme-input" placeholder="Your Email*">
                            <textarea class="theme-input" placeholder="Your Message Here*" rows="6"></textarea>
                            <button type="submit" class="template-btn primary-btn">Track Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact form section end-->

@endsection
