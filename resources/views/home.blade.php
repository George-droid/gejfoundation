@extends('layouts.default')

@section('content')
    <body>
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/1.jpeg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">Promoting Peace and Prosperity</h1>
                                        <p class="fs-5 text-white-50 mb-5 animated slideInDown">Fostering Good Governance: Strengthening Democracy for a Stable and Prosperous Society</p>
                                        <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                            Learn More
                                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">Promoting Peace and Prosperity</h1>
                                        <p class="fs-5 text-white-50 mb-5 animated slideInDown">Charting the Course: Advancing Democracy and Stability for Lasting Prosperity</p>
                                        <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                            Learn More
                                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/2.jpeg" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Causes Start -->
        <div class="container-xxl bg-light my-5 py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Latest News</div>
                    {{-- <h1 class="display-6 mb-5"></h1> --}}
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>Political Analysis </small>
                                </div>
                                <h5 class="mb-3">Coup d’états: Dangers of democratic disruption and African solutions</h5>
                                <p>Coup d’états: Dangers of democratic disruption and African solutions A news analysis by Emmanuel Oloniruha, News Agency of Nigeria (NAN)…</p>
                                {{-- <div class="causes-progress bg-light p-3 pt-2">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                        <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/courses-1.jpg" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="">
                                        Read More
                                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small> Regional Governance</small>
                                </div>
                                <h5 class="mb-3">Jonathan leads WAEF pre-election mission to Liberia</h5>
                                <p>Former President Dr. Goodluck Ebele Jonathan leads the West African Elders Forum (WAEF) pre-election election mission to Liberia ahead of …</p>
                                {{-- <div class="causes-progress bg-light p-3 pt-2">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                        <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/courses-2.jpg" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="">
                                        Read More
                                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>Political Tenor</small>
                                </div>
                                <h5 class="mb-3">WAEF commends Macky Sall for declining third term</h5>
                                <p>The West Africa Elders Forum (WAEF) has commended the president of Senegal Macky Sall for declining to run for a …</p>
                                {{-- <div class="causes-progress bg-light p-3 pt-2">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                        <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/courses-3.jpg" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="">
                                        Read More
                                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                    <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="img/mission.png" alt="">
                            <h4 class="mb-3">Our Mission</h4>
                            <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                            <a class="btn btn-outline-primary px-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="img/vision.png" alt="">
                            <h4 class="mb-3">Our Vision</h4>
                            <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                            <a class="btn btn-outline-primary px-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Donate Start -->
        <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                        <h1 class="display-6 text-white mb-5">Thanks For The Results Achieved With You</h1>
                        <p class="text-white-50 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-white p-5">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group d-flex justify-content-around">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                            <label class="btn btn-light py-3" for="btnradio1">$10</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-light py-3" for="btnradio2">$20</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                            <label class="btn btn-light py-3" for="btnradio3">$30</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary px-5" style="height: 60px;">
                                            Donate Now
                                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div>
                    <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                    <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                            <h5 class="mb-1">Doner Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                            <h5 class="mb-1">Doner Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                            <h5 class="mb-1">Doner Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


    </body>
@endsection



</html>