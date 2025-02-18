<!--header section start-->
<header class="header-section sticky-header">
    <div class="header-navbar">
        <div class="container-1700 position-relative">
            <div class="row align-items-center">
                <div class="col-xl-3 col-5">
                    <div class="logo-wrapper">
                        <a href="{{ route("index") }}">
                            <img src="{{ url('/storage/' . siteSetting()->logo) }}" class="img-fluid" alt="{{ siteSetting()->name }}" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 d-none d-xl-block">
                    <nav class="header-navigation text-center text-xl-start">
                        <ul>
                            <li>
                                <a href="{{ route("index") }}">Ana səhifə</a>
                            </li>
                            <li><a href="{{ route("ourProjects") }}">Layihələrimiz</a></li>
                            <li><a href="{{ route("contact") }}">Bizimlə əlaqə</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header section end-->


<!--mobile menu start-->
<div class="mobile-menu">
    <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
    <a href="#" class="logo py-3"><img src="{{ url('/storage/' . siteSetting()->logo) }}" alt="{{ siteSetting()->name }}" class="img-fluid"></a>
    <ul class="mobile-nav-menu">
        <li>
            <a href="javascript:void(0)">Home</a>
        </li>
        <li><a href="{{ route("contact") }}">Contact</a></li>
    </ul>
</div>
<!--mobile menu end-->
