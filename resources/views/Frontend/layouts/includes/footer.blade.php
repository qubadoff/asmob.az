<!--footer section start-->
<footer class="footer-section pt-120 overflow-hidden footer-mobile-accordion">
    <div class="container-1700">
        <div class="row g-4">
            <div class="col-xl-4 col-md-6 col-sm-8">
                <div class="footer-widget subscribe-widget">
                    <h4 class="mb-40">
                        Yeniliklərdən xəbərdar olmaq üçün abunə ol
                    </h4>
                    <form action="#" class="d-flex align-items-center">
                        <label>
                            <i class="far fa-envelope"></i>
                            <input type="email" placeholder="Email daxil et">
                        </label>
                        <button type="submit" class="template-btn primary-btn btn-md flex-shrink-0">Abunə ol</button>
                    </form>
                    <div class="mt-50 footer-socials d-flex align-items-center flex-wrap">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-5 offset-md-1 offset-lg-0 col-sm-4">
                <div class="footer-widget footer-nav-widget">
                    <h6 class="widget-title text-uppecase mb-30">Səhifələr</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route("index") }}">Ana səhifə</a></li>
                        <li><a href="{{ route("ourProjects") }}">Layihələrimiz</a></li>
                        <li><a href="{{ route("contact") }}">Bizimlə Əlaqə</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="footer-widget footer-contact-widget">
                    <h6 class="widget-title text-uppercase mb-30">Əlaqə"</h6>
                    <ul class="footer-address">
                        <li><a href="tel:{{ siteSetting()->phone }}">{{ siteSetting()->phone }}</a></li>
                        <li><a href="mailto:{{ siteSetting()->email }}">{{ siteSetting()->email }}</a></li>
                        <li>{{ siteSetting()->location }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer section end-->
