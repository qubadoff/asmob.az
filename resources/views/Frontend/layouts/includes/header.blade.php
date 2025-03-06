<header id="siteHeader">
    <nav>
        <!-- Logo -->
        <a href="{{ route("index") }}">
            <img
                src="{{ url('/storage', siteSetting()->logo) }}"
                alt="{{ siteSetting()->logo }}"
                class="logoimg"
                style="width: 164px" />
        </a>

        <!-- Mobile Menu Button -->
        <button id="menuToggle">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Navigation Menu (Desktop) -->
        <div id="navMenu">
            <ul>
                <li><a href="{{ route("index") }}">Ana səhifə</a></li>
                <li><a href="{{ route("about") }}">Haqqımızda</a></li>
                <li><a href="{{ route("blog") }}">Blog</a></li>
                <li><a href="{{ route("contact") }}">Əlaqə</a></li>
                <!-- Dropdown Menu (Desktop) -->
                <!-- <li class="dropdown">
                  <button class="dropdown-btn">
                    <span>Dropdown</span>
                    <i class="fa-solid fa-chevron-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                  </div>
                </li> -->
            </ul>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu">
        <ul>
            <li><a href="{{ route("index") }}">Ana səhifə</a></li>
            <li><a href="{{ route("about") }}">Haqqımızda</a></li>
            <li><a href="{{ route("blog") }}">Blog</a></li>
            <li><a href="{{ route("contact") }}">Əlaqə</a></li>
            <!-- Mobile Dropdown -->
            <!-- <li class="mobile-dropdown">
              <button id="mobileDropdownButton">
                <span>Dropdown</span>
                <i class="fa-solid fa-chevron-down"></i>
              </button>
              <div id="mobileDropdownMenu">
                <a href="#">Option 1</a>
                <a href="#">Option 2</a>
                <a href="#">Option 3</a>
              </div>
            </li> -->
        </ul>
    </div>
</header>
