<header>
    <a href="{{ route("index") }}" id="logo">
        <img src="{{ url('/storage/' . siteSetting()->logo) }}" alt="Logo" />
    </a>

    <div class="nav_container">
        <nav>
            <div>
                <ul class="list">
                    <li class="cursor-pointer transition-1 listItem1">
                        <a class="home_title" href="{{ route("index") }}">Ana səhifə</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div
        class="burger_menu"
        style="
          width: 10%;
          height: 100%;
          display: flex;
          justify-content: flex-end;
          align-items: center;
          padding-right: 30px;
        "
    >
        <div class="content second">
            <div class="burger">
                <span></span>
            </div>
        </div>
    </div>
    <ul
        class="accordion_container"
        style="
          position: absolute;
          top: 85px;
          width: 90%;
          padding: 0;
          border-top: 3px solid #222;
          background-color: #fff;
          display: none;
        "
    >
        <li class="c">
            <input type="checkbox" id="faq-1" />
            <label for="faq-1" class="color-4 border-top-3">Ana səhifə</label>
        </li>
    </ul>
</header>
