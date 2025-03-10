<!-- Footer -->
<footer class="footer-container">
    <div class="footer-content">
        <div class="footer-wrapper">
            <!-- Contact Info -->
            <div class="footer-column">
                <h1>Əlaqə</h1>
                <p>
                    Əlaqə məlumatlarımızdan istifadə edərək təklif və istəklərinizi bizə bildirin.
                </p>
                <br/>
                <div class="footer-links">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>{{ siteSetting()->location }}</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-phone"></i> <span>{{ siteSetting()->phone }}</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                        <span>{{ siteSetting()->email }}</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-globe"></i> <span>asmob.az</span>
                    </div>
                </div>
            </div>

            <!-- Recent Post -->
            <div class="footer-column">
                <h1>Bloglar</h1>
                @forelse(news() as $news)
                    <div class="recent-post">
                        <img src="{{ url('/storage/' . $news->images) }}" alt="Post Image" />
                        <div>
                            <p class="post-title">
                                <a href="{{ route("news", ['id' => $news->id]) }}">
                                    {{ $news->title }}
                                </a>
                            </p>
                            <p>Tarix: {{ \Carbon\Carbon::parse($news->created_at)->format('d.m.Y') }}</p>
                        </div>
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>

            <!-- Get In Touch Form -->
            <div class="footer-column">
                <h1>Bizə yazın</h1>
                <form class="footer-form">
                    <input type="text" placeholder="Ad və Soyad" />
                    <input type="email" placeholder="E-mail" />
                    <textarea placeholder="Mesaj" rows="3"></textarea>
                    <button type="submit">Göndər</button>
                </form>
            </div>

            <!-- Newsletter -->
            <div class="footer-column">
                <h1>Abunə ol</h1>
                <p>
                    Yeniliklərdən xəbərdar olmaq üçün bizə abunə olun.
                </p>
                <br/>
                <div class="newsletter">
                    <input type="email" placeholder="E-mail" />
                    <button type="submit"><i class="fas fa-check"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Links -->
</footer>

<div class="footer-links-container">
    <!-- Copyright Text -->
    <p class="copyright-text">
        Copyright &copy; {{ date('Y') }}
    </p>

    <!-- Social Icons -->
    <div class="social-icons">
        <a href="#" class="social-icon facebook"
        ><i class="fab fa-facebook-f"></i
            ></a>
        <a href="#" class="social-icon dribbble"
        ><i class="fab fa-instagram"></i
            ></a>
        <a href="#" class="social-icon youtube"
        ><i class="fab fa-youtube"></i
            ></a>
    </div>
</div>
