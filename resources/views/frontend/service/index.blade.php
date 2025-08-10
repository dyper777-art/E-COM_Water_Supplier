@extends('frontend.layout.master')

@section('service_active', 'active')

@section('head')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Service</li>
            </ol>
        </div>
    </div>
@endsection


@section('content')
    <div class="container-fluid service bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Services</h4>
                <h1 class="display-3 text-capitalize mb-3">Reliable Water Solutions for Public and Private Sectors</h1>
            </div>
            <div class="row gx-0 gy-4 align-items-center">
                <!-- Left Column -->
                <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <!-- Service 1 -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="service-content text-end">
                                <a href="#" class="h4 d-inline-block mb-3">Residential Water Delivery</a>
                                <p class="mb-0">Safe, sealed bottled water solutions for homes, with customizable delivery
                                    schedules and volume options.</p>
                            </div>
                            <div class="ps-4">
                                <div class="service-btn"><i class="fas fa-hand-holding-water text-white fa-2x"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="service-content text-end">
                                <a href="#" class="h4 d-inline-block mb-3">Commercial & Government Supply</a>
                                <p class="mb-0">Bulk bottled water supply tailored for offices, events, disaster relief,
                                    and government contracts.</p>
                            </div>
                            <div class="ps-4">
                                <div class="service-btn"><i class="fas fa-truck-moving text-white fa-2x"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="service-item rounded p-4 mb-0">
                        <div class="d-flex">
                            <div class="service-content text-end">
                                <a href="#" class="h4 d-inline-block mb-3">Filtration Plant Operations</a>
                                <p class="mb-0">State-of-the-art filtration and purification plants operated under
                                    certified protocols and quality standards.</p>
                            </div>
                            <div class="ps-4">
                                <div class="service-btn"><i class="fas fa-filter text-white fa-2x"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-transparent">
                        <img src="{{ asset('frontend/img/water.png') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                    <!-- Service 4 -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="pe-4">
                                <div class="service-btn"><i class="fas fa-tint-slash text-white fa-2x"></i></div>
                            </div>
                            <div class="service-content">
                                <a href="#" class="h4 d-inline-block mb-3">Water Softening Systems</a>
                                <p class="mb-0">Advanced softening systems for institutional and industrial water use,
                                    reducing mineral deposits and scaling.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="pe-4">
                                <div class="service-btn"><i class="fas fa-chart-line text-white fa-2x"></i></div>
                            </div>
                            <div class="service-content">
                                <a href="#" class="h4 d-inline-block mb-3">Regulatory Compliance Consulting</a>
                                <p class="mb-0">Assisting agencies in meeting local, state, and federal water safety and
                                    environmental regulations.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="service-item rounded p-4 mb-0">
                        <div class="d-flex">
                            <div class="pe-4">
                                <div class="service-btn"><i class="fas fa-project-diagram text-white fa-2x"></i></div>
                            </div>
                            <div class="service-content">
                                <a href="#" class="h4 d-inline-block mb-3">Custom Project Planning</a>
                                <p class="mb-0">Designing and executing scalable water distribution strategies for
                                    municipalities, institutions, and remote sites.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Counter -->
    <div class="container-fluid counter py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-thumbs-up fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Happy Clients</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">456</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-truck fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Transport</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">513</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Employees</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">53</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-heart fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Years Experiance</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">17</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Counter -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Testimonials</h4>
                <h1 class="display-4 text-capitalize mb-3">What Our Clients Say</h1>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp owl-loaded owl-drag" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!-- Testimonial 1 -->
                <div class="testimonial-item text-center p-4">
                    <p>
                        “Their bottled water met all safety and quality standards. Timely delivery and smooth coordination
                        made them an excellent vendor for our municipal distribution program.”
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                            class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="client photo">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Maria Lopez</h4>
                        <p class="m-0 pb-3">Procurement Officer, City of Austin</p>
                        <div class="d-flex justify-content-center text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item text-center p-4">
                    <p>
                        “We’ve partnered with them on emergency water supply contracts. Their team handled high-volume
                        requests efficiently, even during crisis situations.”
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                            class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="client photo">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">James Nolan</h4>
                        <p class="m-0 pb-3">Logistics Manager, FEMA Texas Region</p>
                        <div class="d-flex justify-content-center text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item text-center p-4">
                    <p>
                        “Impressive quality control. Their lab-tested mineral balance gives us peace of mind when supplying
                        water to public facilities.”
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('frontend/img/testimonial-3.jpg') }}"
                            class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="client photo">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Dr. Anita Shah</h4>
                        <p class="m-0 pb-3">Public Health Advisor</p>
                        <div class="d-flex justify-content-center text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->
@endsection
