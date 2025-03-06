@extends('Frontend.layouts.app')

@section('title', 'Ən son bloglar')

@section('content')
    <div class="blog-main-wrapper">
        <div class="blog-main-container">
            <div class="blog-main-left">
                <div class="all-blog-container">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <img
                                width="877"
                                height="640"
                                src="{{ url('/storage/' . $data->images) }}"
                                alt="" />
                        </div>
                        <div class="blog-content-container">
                            <h3>
                                <a href="#">
                                    {{ $data->title }}
                                </a>
                            </h3>
                            <span>
                                <a href="#">{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</a>
                            </span>
                            <div class="blog-divider"></div>
                            <p>
                                {!! $data->body !!}
                            </p>
                            <div class="blog-divider"></div>

                            <div class="tags-share-container">
                                <div class="social-share">
                                    <a href="#" class="social-btn facebook"
                                    ><i class="fab fa-facebook-f"></i
                                        ></a>
                                    <a href="#" class="social-btn twitter"
                                    ><i class="fab fa-x-twitter"></i
                                        ></a>
                                    <a href="#" class="social-btn pinterest"
                                    ><i class="fab fa-pinterest"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-main-right">
                <div class="other-blogs-container">
                    <div class="recent-posts">
                        <h3 class="title">
                            Son əlavələr
                        </h3>
                        <ul class="post-list">
                            @forelse(news() as $news)
                                <li>
                                    <a href="{{ route('singleBlog', ['id' => $news->id]) }}">
                                        <i class="fas fa-caret-right"></i>
                                        {{ $news->title }}
                                    </a>
                                </li>
                            @empty
                                No Data !
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
