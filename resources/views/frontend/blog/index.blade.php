@extends('frontend.layout.master')

@section('blog_active', 'active')

@section('head')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our News & Blog</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">News & Blog</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Blog</h4>
                <h1 class="display-3 text-capitalize mb-3">Latest Industry News & Updates</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Blog Post 1 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">

                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> July 28, 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Ensuring Clean Water Supply During
                                Emergencies</a>
                            <p>Discover how our team supports municipalities and relief efforts with rapid deployment of
                                bottled water solutions in crisis scenarios.</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">

                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> August 3, 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Our Commitment to Water Quality Standards</a>
                            <p>We adhere to WHO, EPA, and ISO standards in every batch we deliver. Learn about our rigorous
                                lab testing and filtration processes.</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">

                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> August 9, 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Partnering with Local Governments for Water
                                Distribution</a>
                            <p>We work with public institutions to develop customized delivery programs that ensure reliable
                                access to clean water for all.</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
