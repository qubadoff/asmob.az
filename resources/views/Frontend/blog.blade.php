@extends('Frontend.layouts.app')

@section('title', 'Bloglar')

@section('content')
    <!-- Hero Section Image -->
    <div class="hero-section-blog">
        <!-- <div class="hero-image-container-blog"> -->
        <img
            src="{{ url('/') }}/assets/contacthero.jpg"
            alt="Contact Us"
            class="hero-image-blog" />
        <div class="hero-overlay-blog">
            <div class="hero-content-blog">
                <h1>Ən son bloglar</h1>
                <p>
                    Bir sıra mövzülarda olan maraqlı yazılarımız ilə tanış olun
                </p>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <div class="blog-main-wrapper">
        <div class="blog-main-container">
            <div class="blog-main-left">
                <div class="all-blog-container">
                    @forelse(\App\Models\News::query()->where('status', \App\Enum\NewsStatusEnum::PUBLISHED->value)->orderBy('created_at', 'desc')->get() as $blog)
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <img
                                    width="877"
                                    height="640"
                                    src="{{ url('/') }}/storage/{{ $blog->images }}"
                                    alt="{{ $blog->title }}" />
                            </div>
                            <div class="blog-content-container">
                                <h3>
                                    <a href="{{ route("singleBlog", ['id' => $blog->id]) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <span>
                              <a href="{{ route("singleBlog", ['id' => $blog->id]) }}">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a>
                            </span>
                                <p>
                                    {{ $blog->description }}
                                </p>
                            </div>
                        </div>
                    @empty
                        No Data !
                    @endforelse
                </div>
            </div>
            <div class="blog-main-right">
                <div class="other-blogs-container">
                    <div class="blog-search">
                        <input type="email" placeholder="Axtar" />
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="recent-posts">
                        <h3 class="title">Son əlavələr</h3>
                        <ul class="post-list">
                            @forelse(\App\Models\News::query()->where('status', \App\Enum\NewsStatusEnum::PUBLISHED->value)->orderBy('created_at', 'desc')->limit(5)->get() as $blog)
                                <li>
                                    <a href="{{ route("singleBlog", ['id' => $blog->id]) }}"><i class="fas fa-caret-right"></i>
                                        {{ $blog->title }}
                                    </a>
                                </li>
                            @empty
                                No Data !
                            @endforelse
                        </ul>
                    </div>
{{--                    <div class="recent-posts">--}}
{{--                        <h3 class="title">RECENT POSTS</h3>--}}
{{--                        <ul class="post-list">--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fas fa-caret-right"></i> Gift Ideas For Art &--}}
{{--                                    Nature Lovers</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fas fa-caret-right"></i> Kitchen Inspiration With--}}
{{--                                    Reform</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fas fa-caret-right"></i> Better Dreams With--}}
{{--                                    Box-Spring</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fas fa-caret-right"></i> Spruce up your home</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                ><i class="fas fa-caret-right"></i> Update home for--}}
{{--                                    summer</a--}}
{{--                                >--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="recent-posts">--}}
{{--                        <h3 class="title">RECENT POSTS</h3>--}}
{{--                        <p>--}}
{{--                            Synergistically envisioneer best whereas error-free--}}
{{--                            opportunities. Uniquely easy disseminate turnkey resource rather--}}
{{--                            than standards compliant sources and brand timely networks with--}}
{{--                            technically.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="recent-posts">--}}
{{--                        <h3 class="title">TAGS</h3>--}}
{{--                        <div class="tags-container">--}}
{{--                            <!-- <a href="#" class="tag active">Aenean</a> -->--}}
{{--                            <a href="#" class="tag">Curabitur</a>--}}
{{--                            <a href="#" class="tag">habitant</a>--}}
{{--                            <a href="#" class="tag">Lorem</a>--}}
{{--                            <a href="#" class="tag">Maecenas</a>--}}
{{--                            <a href="#" class="tag">Mauris</a>--}}
{{--                            <a href="#" class="tag">Maximus</a>--}}
{{--                            <a href="#" class="tag">Pellentesque</a>--}}
{{--                            <a href="#" class="tag">Phasellus</a>--}}
{{--                            <a href="#" class="tag">Praesent</a>--}}
{{--                            <a href="#" class="tag">Quisque</a>--}}
{{--                            <a href="#" class="tag">Scelerisque</a>--}}
{{--                            <a href="#" class="tag">Suspendisse</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
