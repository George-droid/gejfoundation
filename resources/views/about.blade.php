@extends('layouts.default')

@section('content')
    <body>
         <!-- Donate Start -->
         <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-3">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">The Goodluck Jonathan Foundation</div>
                        <h1 class="display-6 text-white mb-5"></h1>
                        <p class="text-white-50 mb-0">The Goodluck Jonathan Foundation, founded by the former President of Nigeria (2010-2015) is an independent non-governmental organization established in 2015 for the advancement of peace and prosperity on the African continent.

                            We are dedicated to promoting peace and reconciliation, advancing democratic governance, advocating for inclusive governance and economic development, promoting citizen’s rights, and continental and national integration.</p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-white p-5">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/GAgrr2V7LDI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->

        <div class="container-xxl py-3">
            <div class="container my-3 py-3">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Who We Are</div>
                            <h1 class="display-6 mb-5">We Promote Peace and Prosperity Around the World</h1>
                            <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                                <p class="text-dark mb-2">
                                    We understand that preserving and upholding democratic principles are prerequisites for any peaceful and prosperous nation.</p>
                                <span class="text-primary">Goodluck Ebele Jonathan, Founder</span>
                            </div>
                            <p class="mb-5">Through initiatives such as electoral reform, enhancing women and youth participation in elections, and mobilizing for violence-free elections in Nigeria, we aim to create positive change. Additionally, we are committed to nurturing 10,000 detribalized and emotionally resilient Nigerian children. Together, we're building a brighter future for Africa.</p>
                            <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                            <a class="btn btn-outline-primary py-2 px-3" href="">
                                Contact Us
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/2.jpeg" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- About End -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                    <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-70 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="img/corevalue.png" alt="">
                            <h4 class="mb-3">Our Core Values</h4>
                            <p class="mb-4">Transparency and accountability, Equity & Fairness, Respect, Integrity, Inclusiveness, Independence, Professionalism.</p>
                            {{-- <a class="btn btn-outline-primary px-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white text-center h-70 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="img/vision.png" alt="">
                            <h4 class="mb-3">Our Vision</h4>
                            <p class="mb-4">Peaceful, Just and Progressive Nations of Africa</p>
                            {{-- <a class="btn btn-outline-primary px-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white text-center h-70 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="img/mission.png" alt="">
                            <h4 class="mb-3">Our Mission</h4>
                            <p class="mb-4">To forge a continent where we understand our differences and work towards a perfect union founded on transparency, equity and justice</p>
                            {{-- <a class="btn btn-outline-primary px-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Service End -->

    </body>
@endsection



</html>