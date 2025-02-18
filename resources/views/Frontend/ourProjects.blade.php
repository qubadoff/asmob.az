@extends('Frontend.layouts.app')

@section('title')
    Bizim Layihələrimiz
@endsection

@section('content')
    <!--shop section start-->
    <section class="shop-section bg-white ptb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12 order-1 order-xl-2">
                    <div class="shop-grid">
                        <div class="products-grid mt-40">
                            <div class="row g-4"> <!-- Row buraya alındı, her item yan yana dizilecek -->
                                @forelse($data as $d)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="vr5-product-card">
                                            <div class="feature-image position-relative h-300">
                                                <img src="{{ url('/') }}/storage/{{ $d['images'][0] }}" alt="not found" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;">
                                            </div>
                                            <div class="product-content">
                                            <span class="fw-semibold subtitle text-uppercase">
                                                {{ $d->category->name }}
                                            </span>
                                                <a href="{{ route("singleOurProjects", ['id' => $d->id]) }}" class="d-block text-decoration-none text-dark fw-semibold") }}">
                                                    <h6 class="fw-semibold mt-3">
                                                        {{ $d->name }}
                                                    </h6>
                                                </a>
                                                <p class="fs-sm mb-4">
                                                    {{ $d->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p class="text-center">No Data !</p>
                                    </div>
                                @endforelse
                            </div> <!-- Row burada kapatıldı -->
                        </div>

                        <!-- Sayfalama -->
                        <div class="text-center mt-60">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shop section end-->
@endsection
