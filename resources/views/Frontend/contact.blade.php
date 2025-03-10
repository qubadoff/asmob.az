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
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3901.886035061827!2d49.851797999999995!3d40.450525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDI3JzAxLjkiTiA0OcKwNTEnMDYuNSJF!5e1!3m2!1sen!2saz!4v1741262688673!5m2!1sen!2saz"
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
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            \Illuminate\Support\Facades\Session::forget('success');
                        @endphp
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                        @php
                            \Illuminate\Support\Facades\Session::forget('error');
                        @endphp
                    </div>
                @endif
                <h2 class="text-orange">Bizə yazın</h2>
                <p>
                    Təklif və istəkləriniz barədə bizə yazın. Ən qısa müddətdə geri dönüş ediləcək.
                </p>

                <form method="POST" action="{{ route("sendMessage") }}">
                    @csrf
                    @method('POST')
                    <input type="text" name="name" placeholder="Ad və Soyad" required />
                    <input type="text" name="phone" placeholder="Telefon nömrəsi" required />
                    <input type="email" name="email" placeholder="E-mail adresi" required />
                    <textarea name="body" placeholder="Mesaj" rows="4" required></textarea>
                    <button type="submit">Göndər</button>
                </form>
            </div>
        </div>
    </div>

@endsection
