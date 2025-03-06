@extends('Frontend.layouts.app')

@section('title', 'Əlaqə')

@section('content')

    <!-- Hero Section Image -->
    <div class="hero-section">
        <img src="{{ url('/') }}/assets/contacthero.jpg" alt="Contact Us" class="hero-image" />
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Bizimlə Əlaqə</h1>
                <p>
                    Əlaqə məlumatlarından istifadə edərək təklif və istəklərinizi bizə bildirin.
                </p>
            </div>
        </div>
    </div>

    <!-- Google Map Section -->
    <div class="contact-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52217.48665219871!2d-0.11809229839439942!3d51.50986543907473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760354839c6d3b%3A0xf453c3f610900f42!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1740600204166"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <!-- Contact Info & Form -->
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <div>
                    <h2 class="text-orange">Ünvan</h2>
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        {{ siteSetting()->location }}
                    </p>
                </div>

                <div>
                    <h2 class="text-orange">Telefon</h2>
                    <p><i class="fas fa-fax"></i>
                        {{ siteSetting()->phone }}
                    </p>
                </div>

                <div>
                    <h2 class="text-green">E-mail</h2>
                    <p>
                        <i class="fas fa-envelope"></i>
                        {{ siteSetting()->email }}
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h2 class="text-orange">Bizə yazın</h2>
                <p>
                    Təklif və istəkləriniz barədə bizə yazın. Ən qısa müddətdə geri dönüş ediləcək.
                </p>

                <form>
                    <input type="text" placeholder="Ad və Soyad" />
                    <input type="email" placeholder="E-mail adresi" />
                    <textarea placeholder="Mesaj" rows="4"></textarea>
                    <button type="submit">Göndər</button>
                </form>
            </div>
        </div>
    </div>

@endsection
