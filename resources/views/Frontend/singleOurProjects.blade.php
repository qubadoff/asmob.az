@extends('Frontend.layouts.app')

@section('title')
    {{ $data->name }}
@endsection


@section('content')
    <!--product details start-->
    <section class="vr-prodcuct-details ptb-140 light-bg-2 border-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="vr-product-details-content">
                        <h3 class="mb-4 fw-semibold">
                            {{ $data->name }}
                        </h3>

                        <p class="mb-40 mt-30">
                            {{ $data->description }}
                        </p>

                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="vr-product-double-slider mt-5 mt-xl-0">
                        <div class="vr-product-thumb position-relative bg-white">
                            <div class="vr-poroduct-single-slider">
                                <!-- Ürün görsellerini döngü ile listele -->
                                @foreach ($data->images as $image)
                                    <div class="single-item text-center">
                                        <span class="zoom-on-hover d-inline-block">
                                            <img src="{{ url('/') }}/storage/{{ $image }}" alt="product" class="img-fluid mood-multiply d-inline-block">
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="vr-product-thumb-control mt-4 left-slider">
                            <!-- İlk iki görseli küçük resim olarak tekrar göster -->
                            @foreach ($data->images as $index => $image)
                                @if ($index < 2)
                                    <div class="single-item text-center bg-white">
                                        <img src="{{ url('/') }}/storage/{{ $image }}" alt="product" class="img-fluid d-inline-block">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!---product details end-->
@endsection
