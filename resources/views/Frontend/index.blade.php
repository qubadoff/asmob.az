@extends('Frontend.layouts.app')


@section('title')
    Ana Səhifə
@endsection

@section('content')
    <!--hero section start-->
    <section class="hero-section ptb-120 d-flex align-items-center justify-content-center overflow-hidden" data-background="{{ url('/assets') }}/images/bg/hero-bg.jpg">
        <div class="container position-relative">
            <div class="hero-vertical-slider">
                @forelse(slider() as $slide)
                    <div class="single-item">
                        <img src="{{ url('/storage/' . $slide->image) }}" alt="not found" class="img-fluid" />
                    </div>
                @empty
                    <p>Not Found</p>
                @endforelse
            </div>
            <div class="hero-main-slider">
                @forelse(slider() as $slide)
                    <div class="hero-single-slide">
                        <div class="row g-5 align-items-center justify-content-between">
                            <div class="col-xl-6 col-lg-9">
                                <div class="hero-content-wrapper">
                                    <h1 class="hero-title mb-40">{{ $slide->name }}</h1>
                                    <a href="#" class="template-btn white-btn">Read more</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9">
                                <div class="hero-images text-end position-relative">
                                    <img src="{{ url('/storage/' . $slide->image ) }}" alt="not found" class="img-fluid position-absolute start-0 bottom-0 image-2">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Not Found</p>
                @endforelse
            </div>
        </div>
    </section>
    <!--hero section end-->


    <!--collection section start-->
    <section class="collection-section ptb-140">
        <div class="container">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title">
                        <h2 class="mb-0">Layihələr</h2>
                    </div>
                </div>
            </div>
            <div class="filter-nav vr-filter-btns mt-40">
                <button data-filter="*" class="active">Chair</button>
                <button data-filter=".sofa">Sofas</button>
                <button data-filter=".stools">Poufs & Stools</button>
                <button data-filter=".tables">Tables</button>
                <button data-filter=".storage">Storage</button>
                <button data-filter=".rugs">Rugs</button>
            </div>

            <div class="row grid_1 g-4">
                <div class="col-xl-5 col-lg-6 stools tables rugs">
                    <div class="vr-product-card wow fadeInUp">
                        <div class="feature-thumb position-relative">
                            <a href="product-details.html">
                                <img src="{{ url('/assets') }}/images/products/table.png" alt="thumbnail" class="feature-thumbnail thumb" />
                                <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thumbnail" class="feature-thumbnail thumb-hover" />
                            </a>
                            <span class="circle-badge primary">HOT</span>
                            <div class="action-box primary-bg-color">
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Cart</span>
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6093 5C13.6093 2.79086 11.8185 1 9.60933 1C7.40019 1 5.60933 2.79086 5.60933 5M17.0546 7.67395L17.988 13.274C18.2016 14.5559 18.3087 15.1968 18.1232 15.6964C17.9604 16.1347 17.6493 16.5022 17.2437 16.7349C16.7814 17 16.1313 17 14.8317 17H4.38667C3.08705 17 2.43778 17 1.97554 16.7349C1.56991 16.5022 1.25815 16.1347 1.09533 15.6964C0.909784 15.1968 1.01677 14.5559 1.23042 13.274L2.16376 7.67395C2.32209 6.72398 2.40151 6.24902 2.63854 5.89258C2.84748 5.57838 3.14103 5.32965 3.48531 5.17521C3.87586 5 4.35719 5 5.32027 5H13.8987C14.8617 5 15.343 5 15.7336 5.17521C16.0778 5.32965 16.3711 5.57838 16.58 5.89258C16.8171 6.24902 16.8963 6.72399 17.0546 7.67395Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="#product_view" data-bs-toggle="modal">
                                    <span class="tooltip-text">Quick View</span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8712 11.7359L16.31 15.1739L15.1739 16.31L11.7359 12.8712C10.4567 13.8967 8.86556 14.4544 7.22605 14.4521C3.23727 14.4521 0 11.2148 0 7.22605C0 3.23727 3.23727 0 7.22605 0C11.2148 0 14.4521 3.23727 14.4521 7.22605C14.4544 8.86556 13.8967 10.4567 12.8712 11.7359ZM11.2606 11.1402C12.2796 10.0923 12.8486 8.68766 12.8463 7.22605C12.8463 4.12045 10.3308 1.60579 7.22605 1.60579C4.12045 1.60579 1.60579 4.12045 1.60579 7.22605C1.60579 10.3308 4.12045 12.8463 7.22605 12.8463C8.68766 12.8486 10.0923 12.2796 11.1402 11.2606L11.2606 11.1402Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Wishlist</span>
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.65655 1.32344C10.6898 -0.502047 13.8318 -0.441457 15.7906 1.52078C17.7485 3.48389 17.816 6.61032 15.9948 8.6496L8.65481 16L1.31653 8.6496C-0.504621 6.61032 -0.436241 3.4787 1.52081 1.52078C3.48132 -0.43886 6.61727 -0.504643 8.65655 1.32344ZM14.5649 2.74383C13.2666 1.44375 11.1719 1.39095 9.81294 2.6114L8.65741 3.64835L7.50101 2.61227C6.13774 1.39008 4.0474 1.44375 2.74559 2.74556C1.45589 4.03526 1.39097 6.09964 2.5794 7.46377L8.65568 13.5496L14.732 7.46464C15.9213 6.09964 15.8563 4.03786 14.5649 2.74383Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-bottom mt-30 d-flex align-items-center justify-content-between gap-4">
                            <div>
                                <a href="product-details.html"><h5 class="mb-3">Natural Smart Chair</h5></a>
                                <span class="fw-medium text-main-color">$256.39</span>
                            </div>
                            <ul class="rating-star d-inline-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 sofa tables">
                    <div class="vr-product-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-thumb position-relative">
                            <div class="vr-thumbnail-control-slider" id="vr_thumbnail_control_slider1">
                                <div class="single-item">
                                    <img src="{{ url('/assets') }}/images/products/vr-thumbnail-1.png" alt="thumbnail" class="img-fluid">
                                </div>
                                <div class="single-item">
                                    <img src="{{ url('/assets') }}/images/products/vr-thumbnail-2.png" alt="thumbnail" class="img-fluid">
                                </div>
                                <div class="single-item">
                                    <img src="{{ url('/assets') }}/images/products/vr-thumbnail-3.png" alt="thumbnail" class="img-fluid">
                                </div>
                                <div class="single-item">
                                    <img src="{{ url('/assets') }}/images/products/vr-thumbnail-4.png" alt="thumbnail" class="img-fluid">
                                </div>
                            </div>
                            <div class="thumbnail-slider-wrapper d-block">
                                <div class="vr-thumbnail-slider" id="vr_thumbnail_slider1">
                                    <div class="single-item position-relative">
                                        <a href="product-details.html">
                                            <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thubnail" class="img-fluid feature-thumbnail thumb" />
                                            <img src="{{ url('/assets') }}/images/products/chair-pd-hover.png" alt="thubnail" class="img-fluid feature-thumbnail thumb-hover" />
                                        </a>
                                    </div>
                                    <div class="single-item position-relative">
                                        <a href="product-details.html">
                                            <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thubnail" class="img-fluid feature-thumbnail thumb" />
                                            <img src="{{ url('/assets') }}/images/products/chair-pd-hover.png" alt="thubnail" class="img-fluid feature-thumbnail thumb-hover" />
                                        </a>
                                    </div>
                                    <div class="single-item position-relative">
                                        <a href="product-details.html">
                                            <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thubnail" class="img-fluid feature-thumbnail thumb" />
                                            <img src="{{ url('/assets') }}/images/products/chair-pd-hover.png" alt="thubnail" class="img-fluid feature-thumbnail thumb-hover" />
                                        </a>
                                    </div>
                                    <div class="single-item position-relative">
                                        <a href="product-details.html">
                                            <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thubnail" class="img-fluid feature-thumbnail thumb" />
                                            <img src="{{ url('/assets') }}/images/products/chair-pd-hover.png" alt="thubnail" class="img-fluid feature-thumbnail thumb-hover" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="action-box primary-bg-color">
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Cart</span>
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6093 5C13.6093 2.79086 11.8185 1 9.60933 1C7.40019 1 5.60933 2.79086 5.60933 5M17.0546 7.67395L17.988 13.274C18.2016 14.5559 18.3087 15.1968 18.1232 15.6964C17.9604 16.1347 17.6493 16.5022 17.2437 16.7349C16.7814 17 16.1313 17 14.8317 17H4.38667C3.08705 17 2.43778 17 1.97554 16.7349C1.56991 16.5022 1.25815 16.1347 1.09533 15.6964C0.909784 15.1968 1.01677 14.5559 1.23042 13.274L2.16376 7.67395C2.32209 6.72398 2.40151 6.24902 2.63854 5.89258C2.84748 5.57838 3.14103 5.32965 3.48531 5.17521C3.87586 5 4.35719 5 5.32027 5H13.8987C14.8617 5 15.343 5 15.7336 5.17521C16.0778 5.32965 16.3711 5.57838 16.58 5.89258C16.8171 6.24902 16.8963 6.72399 17.0546 7.67395Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="#product_view" data-bs-toggle="modal">
                                    <span class="tooltip-text">Quick View</span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8712 11.7359L16.31 15.1739L15.1739 16.31L11.7359 12.8712C10.4567 13.8967 8.86556 14.4544 7.22605 14.4521C3.23727 14.4521 0 11.2148 0 7.22605C0 3.23727 3.23727 0 7.22605 0C11.2148 0 14.4521 3.23727 14.4521 7.22605C14.4544 8.86556 13.8967 10.4567 12.8712 11.7359ZM11.2606 11.1402C12.2796 10.0923 12.8486 8.68766 12.8463 7.22605C12.8463 4.12045 10.3308 1.60579 7.22605 1.60579C4.12045 1.60579 1.60579 4.12045 1.60579 7.22605C1.60579 10.3308 4.12045 12.8463 7.22605 12.8463C8.68766 12.8486 10.0923 12.2796 11.1402 11.2606L11.2606 11.1402Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Wishlist</span>
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.65655 1.32344C10.6898 -0.502047 13.8318 -0.441457 15.7906 1.52078C17.7485 3.48389 17.816 6.61032 15.9948 8.6496L8.65481 16L1.31653 8.6496C-0.504621 6.61032 -0.436241 3.4787 1.52081 1.52078C3.48132 -0.43886 6.61727 -0.504643 8.65655 1.32344ZM14.5649 2.74383C13.2666 1.44375 11.1719 1.39095 9.81294 2.6114L8.65741 3.64835L7.50101 2.61227C6.13774 1.39008 4.0474 1.44375 2.74559 2.74556C1.45589 4.03526 1.39097 6.09964 2.5794 7.46377L8.65568 13.5496L14.732 7.46464C15.9213 6.09964 15.8563 4.03786 14.5649 2.74383Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="circle-badge primary">HOT</span>
                            <span class="circle-badge danger mt-60">-25%</span>
                        </div>
                        <div class="card-bottom mt-30 d-flex align-items-center justify-content-between gap-4">
                            <div>
                                <a href="product-details.html"><h5 class="mb-3">Natural Wood Smart Chair</h5></a>
                                <del class="me-2">$256.39</del>
                                <span class="fw-medium text-main-color">$256.39</span>
                            </div>
                            <ul class="rating-star d-inline-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 stools storage sofa">
                    <div class="vr-product-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-thumb position-relative">
                            <a href="product-details.html">
                                <img src="{{ url('/assets') }}/images/products/weardrobe.png" alt="thumbnail" class="feature-thumbnail thumb" />
                                <img src="{{ url('/assets') }}/images/products/weardrobe-hover.png" alt="thumbnail" class="feature-thumbnail thumb-hover" />
                            </a>
                            <span class="circle-badge sale">Sale</span>
                            <div class="action-box primary-bg-color">
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Cart</span>
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6093 5C13.6093 2.79086 11.8185 1 9.60933 1C7.40019 1 5.60933 2.79086 5.60933 5M17.0546 7.67395L17.988 13.274C18.2016 14.5559 18.3087 15.1968 18.1232 15.6964C17.9604 16.1347 17.6493 16.5022 17.2437 16.7349C16.7814 17 16.1313 17 14.8317 17H4.38667C3.08705 17 2.43778 17 1.97554 16.7349C1.56991 16.5022 1.25815 16.1347 1.09533 15.6964C0.909784 15.1968 1.01677 14.5559 1.23042 13.274L2.16376 7.67395C2.32209 6.72398 2.40151 6.24902 2.63854 5.89258C2.84748 5.57838 3.14103 5.32965 3.48531 5.17521C3.87586 5 4.35719 5 5.32027 5H13.8987C14.8617 5 15.343 5 15.7336 5.17521C16.0778 5.32965 16.3711 5.57838 16.58 5.89258C16.8171 6.24902 16.8963 6.72399 17.0546 7.67395Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="#product_view" data-bs-toggle="modal">
                                    <span class="tooltip-text">Quick View</span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8712 11.7359L16.31 15.1739L15.1739 16.31L11.7359 12.8712C10.4567 13.8967 8.86556 14.4544 7.22605 14.4521C3.23727 14.4521 0 11.2148 0 7.22605C0 3.23727 3.23727 0 7.22605 0C11.2148 0 14.4521 3.23727 14.4521 7.22605C14.4544 8.86556 13.8967 10.4567 12.8712 11.7359ZM11.2606 11.1402C12.2796 10.0923 12.8486 8.68766 12.8463 7.22605C12.8463 4.12045 10.3308 1.60579 7.22605 1.60579C4.12045 1.60579 1.60579 4.12045 1.60579 7.22605C1.60579 10.3308 4.12045 12.8463 7.22605 12.8463C8.68766 12.8486 10.0923 12.2796 11.1402 11.2606L11.2606 11.1402Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Wishlist</span>
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.65655 1.32344C10.6898 -0.502047 13.8318 -0.441457 15.7906 1.52078C17.7485 3.48389 17.816 6.61032 15.9948 8.6496L8.65481 16L1.31653 8.6496C-0.504621 6.61032 -0.436241 3.4787 1.52081 1.52078C3.48132 -0.43886 6.61727 -0.504643 8.65655 1.32344ZM14.5649 2.74383C13.2666 1.44375 11.1719 1.39095 9.81294 2.6114L8.65741 3.64835L7.50101 2.61227C6.13774 1.39008 4.0474 1.44375 2.74559 2.74556C1.45589 4.03526 1.39097 6.09964 2.5794 7.46377L8.65568 13.5496L14.732 7.46464C15.9213 6.09964 15.8563 4.03786 14.5649 2.74383Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-bottom mt-30 d-flex align-items-center justify-content-between gap-4">
                            <div>
                                <a href="product-details.html"><h5 class="mb-3">Smart Weardrobe</h5></a>
                                <span class="fw-medium text-main-color">$256.39</span>
                            </div>
                            <ul class="rating-star d-inline-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 storage rugs">
                    <div class="vr-product-card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-thumb position-relative">
                            <div class="vr-thumbnail-control-slider">
                                <div class="single-item">
                                    <img src="{{ url('/assets') }}/images/products/vr-thumbnail-1.png" alt="thumbnail" class="img-fluid">
                                </div>
                                <div class="single-item">
                                    <img src="{{ url('/assets') }}/images/products/vr-thumbnail-2.png" alt="thumbnail" class="img-fluid">
                                </div>
                            </div>
                            <div class="thumbnail-slider-wrapper d-block">
                                <div class="vr-thumbnail-slider">
                                    <div class="single-item position-relative">
                                        <a href="product-details.html">
                                            <img src="{{ url('/assets') }}/images/products/sofa.png" alt="thubnail" class="img-fluid feature-thumbnail thumb" />
                                            <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thubnail" class="img-fluid feature-thumbnail thumb-hover" />
                                        </a>
                                    </div>
                                    <div class="single-item position-relative">
                                        <a href="product-details.html">
                                            <img src="{{ url('/assets') }}/images/products/sofa.png" alt="thubnail" class="img-fluid feature-thumbnail thumb" />
                                            <img src="{{ url('/assets') }}/images/products/chair-pd.png" alt="thubnail" class="img-fluid feature-thumbnail thumb-hover" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="action-box primary-bg-color">
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Cart</span>
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6093 5C13.6093 2.79086 11.8185 1 9.60933 1C7.40019 1 5.60933 2.79086 5.60933 5M17.0546 7.67395L17.988 13.274C18.2016 14.5559 18.3087 15.1968 18.1232 15.6964C17.9604 16.1347 17.6493 16.5022 17.2437 16.7349C16.7814 17 16.1313 17 14.8317 17H4.38667C3.08705 17 2.43778 17 1.97554 16.7349C1.56991 16.5022 1.25815 16.1347 1.09533 15.6964C0.909784 15.1968 1.01677 14.5559 1.23042 13.274L2.16376 7.67395C2.32209 6.72398 2.40151 6.24902 2.63854 5.89258C2.84748 5.57838 3.14103 5.32965 3.48531 5.17521C3.87586 5 4.35719 5 5.32027 5H13.8987C14.8617 5 15.343 5 15.7336 5.17521C16.0778 5.32965 16.3711 5.57838 16.58 5.89258C16.8171 6.24902 16.8963 6.72399 17.0546 7.67395Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="#product_view" data-bs-toggle="modal">
                                    <span class="tooltip-text">Quick View</span>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8712 11.7359L16.31 15.1739L15.1739 16.31L11.7359 12.8712C10.4567 13.8967 8.86556 14.4544 7.22605 14.4521C3.23727 14.4521 0 11.2148 0 7.22605C0 3.23727 3.23727 0 7.22605 0C11.2148 0 14.4521 3.23727 14.4521 7.22605C14.4544 8.86556 13.8967 10.4567 12.8712 11.7359ZM11.2606 11.1402C12.2796 10.0923 12.8486 8.68766 12.8463 7.22605C12.8463 4.12045 10.3308 1.60579 7.22605 1.60579C4.12045 1.60579 1.60579 4.12045 1.60579 7.22605C1.60579 10.3308 4.12045 12.8463 7.22605 12.8463C8.68766 12.8486 10.0923 12.2796 11.1402 11.2606L11.2606 11.1402Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="tooltip-text">Add To Wishlist</span>
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.65655 1.32344C10.6898 -0.502047 13.8318 -0.441457 15.7906 1.52078C17.7485 3.48389 17.816 6.61032 15.9948 8.6496L8.65481 16L1.31653 8.6496C-0.504621 6.61032 -0.436241 3.4787 1.52081 1.52078C3.48132 -0.43886 6.61727 -0.504643 8.65655 1.32344ZM14.5649 2.74383C13.2666 1.44375 11.1719 1.39095 9.81294 2.6114L8.65741 3.64835L7.50101 2.61227C6.13774 1.39008 4.0474 1.44375 2.74559 2.74556C1.45589 4.03526 1.39097 6.09964 2.5794 7.46377L8.65568 13.5496L14.732 7.46464C15.9213 6.09964 15.8563 4.03786 14.5649 2.74383Z" fill="#F8F8F8"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-bottom mt-30 d-flex align-items-center justify-content-between gap-4">
                            <div>
                                <a href="product-details.html"><h5 class="mb-3">Natural Wood Smart Chair</h5></a>
                                <del class="me-2">$256.39</del>
                                <span class="fw-medium text-main-color">$256.39</span>
                            </div>
                            <ul class="rating-star d-inline-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--collection section end-->


    <!--ticker section start-->
    <div class="ticker-area overflow-hidden">
        <div class="ticker-wrapper primary-bg-color">
            <div class="ticker">
                <span class="text-white text-uppercase">Get 20% Discount on your first product</span>
                <span class="text-white text-uppercase">DISCOVER LATEST COLLECTIONS AND TOP DESIGNERS </span>
                <span class="text-white text-uppercase">10% DISCOUNT FOR REGISTERED USERS</span>
                <span class="text-white text-uppercase">Get 20% Discount on your first product</span>
                <span class="text-white text-uppercase">DISCOVER LATEST COLLECTIONS AND TOP DESIGNERS</span>
                <span class="text-white text-uppercase">10% DISCOUNT FOR REGISTERED USERS</span>
            </div>
        </div>
    </div>
    <!--ticker section end-->

    <!--blog section start-->
    <section class="blog-section ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section-title">
                        <h2 class="mb-32">Our Journal</h2>
                        <p class="lead fw-normal mb-70">Casual line. Short Design. 100% Seude Comfort Backsitted Elbow Patches</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-xl-4 col-md-6">
                    <article class="blog-card wow fadeInUp">
                        <div class="feature-image overflow-hidden">
                            <a href="blog-single.html"><img src="{{ url('/assets') }}/images/blog/blog-1.jpg" alt="feature img" class="img-fluid" /></a>
                        </div>
                        <div class="blog-meta mt-30 mb-30 d-flex align-items-center gap-30">
                            <span class="fw-medium"><i class="fa-regular fa-user me-2"></i>Author</span>
                            <span class="fw-medium"><i class="fa-regular fa-calendar me-2"></i>15 Jan, 2023</span>
                        </div>
                        <a href="blog-single.html" class="blog-title"><h5 class="mb-40 fw-semibold">Special edition boots campaign year end sale for you</h5></a>
                        <a href="blog-single.html" class="explore-btn">Read Details</a>
                    </article>
                </div>
                <div class="col-xl-4 col-md-6">
                    <article class="blog-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-image overflow-hidden">
                            <a href="blog-single.html"><img src="{{ url('/assets') }}/images/blog/blog-2.jpg" alt="feature img" class="img-fluid" /></a>
                        </div>
                        <div class="blog-meta mt-30 mb-30 d-flex align-items-center gap-30">
                            <span class="fw-medium"><i class="fa-regular fa-user me-2"></i>Author</span>
                            <span class="fw-medium"><i class="fa-regular fa-calendar me-2"></i>15 Jan, 2023</span>
                        </div>
                        <a href="blog-single.html" class="blog-title"><h5 class="mb-40 fw-semibold">Special edition boots campaign year end sale for you</h5></a>
                        <a href="blog-single.html" class="explore-btn">Read Details</a>
                    </article>
                </div>
                <div class="col-xl-4 col-md-6">
                    <article class="blog-card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-image overflow-hidden">
                            <a href="blog-single.html"><img src="{{ url('/assets') }}/images/blog/blog-3.jpg" alt="feature img" class="img-fluid" /></a>
                        </div>
                        <div class="blog-meta mt-30 mb-30 d-flex align-items-center gap-30">
                            <span class="fw-medium"><i class="fa-regular fa-user me-2"></i>Author</span>
                            <span class="fw-medium"><i class="fa-regular fa-calendar me-2"></i>15 Jan, 2023</span>
                        </div>
                        <a href="blog-single.html" class="blog-title"><h5 class="mb-40 fw-semibold">Special edition boots campaign year end sale for you</h5></a>
                        <a href="blog-single.html" class="explore-btn">Read Details</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->
@endsection
