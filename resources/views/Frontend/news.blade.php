@extends('Frontend.layouts.app')


@section('title')
    {{ $data->title }}
@endsection

@section('content')
    <!--blog single start-->
    <section class="blog-single-section ptb-120 bg-white">
        <div class="container">
            <div class="row g-5 g-xl-4">
                <div class="col-xl-8">
                    <div class="blog-single-content">
                        <img src="{{ url('/') }}/storage/{{ $data['images'] }}" alt="not found" class="img-fluid mb-5">
                        <h3 class="mb-40 fw-normal">{{ $data->title }}</h3>

                        <p class="fw-light text-color">
                            {!! $data->body !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog single end-->
@endsection
