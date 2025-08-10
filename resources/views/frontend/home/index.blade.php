@extends('frontend.layout.master')

@section('home_active', 'active')

@section('head')
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-1">
                        <div class="carousel-caption-1-content" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated"
                                data-animation="fadeInLeft" data-delay="1s"
                                style="animation-delay: 1s; letter-spacing: 3px;">Public Health Priority</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated"
                                data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Securing Clean
                                Water for Stronger Communities</h1>
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft"
                                data-delay="1.5s" style="animation-delay: 1.5s;">
                                Providing safe and sustainable water solutions aligned with government regulations and
                                public health objectives.
                            </p>
                            <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft"
                                data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Request
                                    Proposal</a>
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2"
                                    href="#">Schedule Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-2">
                        <div class="carousel-caption-2-content" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated"
                                data-animation="fadeInRight" data-delay="1s"
                                style="animation-delay: 1s; letter-spacing: 3px;">Infrastructure Solutions</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated"
                                data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Innovative
                                Water Systems for Public Sector Needs</h1>
                            <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight"
                                data-delay="1.5s" style="animation-delay: 1.5s;">
                                Collaborating with government agencies to deliver resilient water infrastructure that meets
                                environmental and community standards.
                            </p>
                            <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight"
                                data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Request
                                    Proposal</a>
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2"
                                    href="#">Contact Our Team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true"
                    data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;">
                    <i class="fa fa-angle-left fa-3x"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true"
                    data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;">
                    <i class="fa fa-angle-right fa-3x"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    <!-- feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Core Capabilities</h4>
                <h1 class="display-3 text-capitalize mb-3">Trusted Provider for Government Water Supply Solutions</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-hand-holding-water text-white fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Regulatory Compliance</h4>
                        <p class="mb-3">Adheres strictly to national and international water quality standards, ensuring
                            safe and reliable supply for public use.</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-filter text-white fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Advanced Filtration</h4>
                        <p class="mb-3">Utilizing multi-stage filtration systems certified for government procurement
                            projects, meeting high-volume demands.</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-recycle text-white fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Traceable Composition</h4>
                        <p class="mb-3">Full transparency on mineral content and sourcing, aligned with environmental and
                            public health mandates.</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-microscope text-white fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Government Lab Integration</h4>
                        <p class="mb-3">Collaborates with certified laboratories for real-time quality monitoring and
                            public sector data reporting.</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- feature End -->


    <!-- About Start -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid rounded h-100 w-100"
                            style="object-fit: cover;" alt="About our water solutions">
                        <div class="about-exp"><span>20 Years of Government Partnership</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">About Us</h4>
                        <h1 class="display-3 mb-3">Reliable Water Solutions for Government Agencies</h1>
                        <p class="mb-4">With over two decades of experience, we specialize in delivering safe, certified,
                            and scalable water supply systems for municipalities, public institutions, and infrastructure
                            projects. Our commitment to quality and compliance ensures long-term value for public sector
                            stakeholders.</p>

                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px;">
                                                <i class="fas fa-certificate text-white fa-2x"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">Certified Compliance</h4>
                                            <p class="mb-0">All processes adhere to ISO, WHO, and local regulatory
                                                standards, ensuring full eligibility for public procurement frameworks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px;">
                                                <i class="fas fa-building text-white fa-2x"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">Public Sector Ready</h4>
                                            <p class="mb-0">Proven track record in delivering bulk water services to
                                                municipalities, health institutions, and emergency response units.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Fact Counter -->
    <div class="container-fluid counter py-5 bg-primary">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-clipboard-check fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Government Projects Delivered</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">120</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-network-wired fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Municipalities Served</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">45</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Compliance Certifications</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">15</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-calendar-check fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Years of Public Sector Experience</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">20</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fact Counter -->

    <!-- Service Start -->
    <div class="container-fluid service bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Services</h4>
                <h1 class="display-3 text-capitalize mb-3">Government-Ready Water Infrastructure Solutions</h1>
            </div>
            <div class="row gx-0 gy-4 align-items-center">
                <!-- Left column -->
                <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Municipal Water Supply</a>
                                        <p class="mb-0">Turnkey solutions for local governments, including water
                                            sourcing, treatment, and distribution networks.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i
                                                class="fas fa-hand-holding-water text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Disaster Relief Water
                                            Logistics</a>
                                        <p class="mb-0">Rapid deployment of clean water systems for emergency and
                                            disaster response coordination with public agencies.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-truck-moving text-white fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Public Filtration
                                            Infrastructure</a>
                                        <p class="mb-0">Design, build, and maintain large-scale filtration plants for
                                            urban and rural water safety.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-filter text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center image -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-transparent">
                        <img src="{{ asset('frontend/img/water.png') }}" class="img-fluid w-100"
                            alt="Public Water Solutions">
                    </div>
                </div>

                <!-- Right column -->
                <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-vials text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Water Quality Monitoring</a>
                                        <p class="mb-0">Continuous lab-based and IoT-enabled monitoring aligned with
                                            public health department regulations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-recycle text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Sustainable Water Management</a>
                                        <p class="mb-0">Solutions for water reuse, conservation, and resource planning in
                                            alignment with SDGs and local mandates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-project-diagram text-white fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Government Project Planning</a>
                                        <p class="mb-0">End-to-end project consultancy from tender response through
                                            execution, tailored to public sector workflows.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Products Start -->
    <div class="container-fluid product py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Product Range</h4>
                <h1 class="display-4 text-capitalize mb-3">Engineered for Public Sector & Institutional Supply</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Product 1 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="product-item">
                        <img src="{{ asset('frontend/img/product-3.png') }}" class="img-fluid w-100 rounded-top"
                            alt="Bulk Packaged Mineral Water">
                        <div class="product-content bg-white text-center rounded-bottom p-4">
                            <p>20L Bulk Jars | Certified for Public Distribution</p>
                            <a href="#" class="h4 d-inline-block mb-3">Mineral Water – Bulk Distribution</a>
                            <p class="mb-3">Ideal for schools, government buildings, hospitals, and field operations.
                                Delivered in tamper-proof, reusable containers.</p>
                            <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Request Specs</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="product-item">
                        <img src="{{ asset('frontend/img/product-2.png') }}" class="img-fluid w-100 rounded-top"
                            alt="RO Treated Water for Institutions">
                        <div class="product-content bg-white text-center rounded-bottom p-4">
                            <p>25L Canisters | RO Treated & Chlorine-Free</p>
                            <a href="#" class="h4 d-inline-block mb-3">RO Water – Institutional Grade</a>
                            <p class="mb-3">Engineered for municipal contracts and bulk tenders. Delivered under full
                                regulatory compliance (ISO/WHO).</p>
                            <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Request Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <img src="{{ asset('frontend/img/product-1.png') }}" class="img-fluid w-100 rounded-top"
                            alt="UV Sterilized Packaged Water">
                        <div class="product-content bg-white text-center rounded-bottom p-4">
                            <p>10L & 15L Packs | UV & Ozone Treated</p>
                            <a href="#" class="h4 d-inline-block mb-3">UV Sterilized Water – Emergency Use</a>
                            <p class="mb-3">For disaster relief, field clinics, and mobile units. Lightweight, stackable
                                packaging for easy deployment.</p>
                            <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Download Datasheet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products End -->


    <!-- Blog Start -->
    <div class="container-fluid blog pb-5 bg-light">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Insights & Updates</h4>
                <h1 class="display-4 text-capitalize mb-3">Water Industry Trends for the Public Sector</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Blog 1 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog-1.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Water Policy Update">
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jul 18 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">New Water Quality Regulations for Public
                                Procurement</a>
                            <p>The 2025 compliance directives outline updated testing, treatment, and reporting protocols
                                for municipal supply contracts.</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog-2.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Infrastructure blog">
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jul 2 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Case Study: Deploying Filtration Systems in
                                Rural Municipalities</a>
                            <p>Explore how a local government in Eastern Region improved drinking water access using
                                decentralized treatment systems.</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog-3.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="Digital water monitoring">
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jun 24 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">How Smart Monitoring Enhances Government
                                Water Services</a>
                            <p>Digital sensors and data dashboards are improving response time, safety, and transparency in
                                government-operated utilities.</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog End -->


    <!-- Team Start -->
    <div class="container-fluid team pb-5 bg-light">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Leadership</h4>
                <h1 class="display-4 text-capitalize mb-3">Meet the Experts Behind Our Public Sector Partnerships</h1>
            </div>
            <div class="row g-4">
                <!-- Member 1 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="{{ asset('frontend/img/team-1.jpg') }}" class="img-fluid rounded-top w-100"
                                    alt="Team Member">
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-2">Harold Brant</h4>
                                <p class="mb-0">Chief Executive Officer</p>
                                <small class="text-muted">25+ years in water infrastructure & B2G partnerships</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="{{ asset('frontend/img/team-2.jpg') }}" class="img-fluid rounded-top w-100"
                                    alt="Team Member">
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-2">Amira Nkrumah</h4>
                                <p class="mb-0">Director of Public Affairs</p>
                                <small class="text-muted">Liaison for municipal, regional, and national agencies</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="{{ asset('frontend/img/team-3.jpg') }}" class="img-fluid rounded-top w-100"
                                    alt="Team Member">
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-2">Kwesi Danquah</h4>
                                <p class="mb-0">Head of Engineering</p>
                                <small class="text-muted">Oversees design & deployment of water treatment systems</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="{{ asset('frontend/img/team-4.jpg') }}" class="img-fluid rounded-top w-100"
                                    alt="Team Member">
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-2">Linda Owusu</h4>
                                <p class="mb-0">Compliance & Quality Director</p>
                                <small class="text-muted">Ensures adherence to EPA and local water regulations</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5 bg-light">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Client Testimonials</h4>
                <h1 class="display-5 text-capitalize mb-3">Trusted by Government & Industry Leaders</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <!-- Testimonial 1 -->
                <div class="testimonial-item text-center p-4 bg-white rounded shadow-sm">
                    <p class="mb-4">"Partnering with this team has significantly improved water accessibility across our
                        district. Their systems are reliable, efficient, and compliant with government standards."</p>
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                            class="img-fluid border border-3 border-primary"
                            style="width: 90px; height: 90px; border-radius: 50%;" alt="Client Photo">
                    </div>
                    <h5 class="text-dark">Mrs. Afia Mensah</h5>
                    <p class="text-muted mb-1">Director of Public Works</p>
                    <small class="text-muted">Eastern Regional Council</small>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item text-center p-4 bg-white rounded shadow-sm">
                    <p class="mb-4">"They provided critical support during our infrastructure upgrade. The filtration
                        systems installed met all EPA guidelines and were delivered ahead of schedule."</p>
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                            class="img-fluid border border-3 border-primary"
                            style="width: 90px; height: 90px; border-radius: 50%;" alt="Client Photo">
                    </div>
                    <h5 class="text-dark">Eng. Kojo Asare</h5>
                    <p class="text-muted mb-1">Chief Engineer</p>
                    <small class="text-muted">Ministry of Sanitation and Water Resources</small>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item text-center p-4 bg-white rounded shadow-sm">
                    <p class="mb-4">"Their team is highly responsive and understands the demands of public procurement.
                        We look forward to collaborating again on future rural water supply projects."</p>
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('frontend/img/testimonial-3.jpg') }}"
                            class="img-fluid border border-3 border-primary"
                            style="width: 90px; height: 90px; border-radius: 50%;" alt="Client Photo">
                    </div>
                    <h5 class="text-dark">Dr. Linda Boakye</h5>
                    <p class="text-muted mb-1">Procurement Lead</p>
                    <small class="text-muted">Ghana Infrastructure Investment Fund</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->
@endsection
