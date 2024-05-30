@extends('layouts.default')

@section('content')
    <body>
 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('img/banner1.jpeg')}}" alt="Image">
                <div class="carousel-caption text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8"> <!-- Increased the width -->
                                <div class="hero-content-wrapper py-4 px-5 border border-key-color rounded custom-box"> <!-- Adjusted padding and custom class -->
                                    <h1 class="fs-4 text-white mb-2 mx-2 animated slideInDown">Promoting Peace and Prosperity</h1>
                                    <p class="fs-6  text-white-50 mb-3 animated slideInDown">Fostering Good Governance: Strengthening Democracy for a Stable and Prosperous Society</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-key-color rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('img/banner2.jpeg')}}" alt="Image">
                <div class="carousel-caption text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8"> <!-- Increased the width -->
                                <div class="hero-content-wrapper py-4 px-5 border border-key-color rounded custom-box"> <!-- Adjusted padding and custom class -->
                                    <h1 class="fs-4 text-white mb-2 mx-2 animated slideInDown">Promoting Peace and Prosperity</h1>
                                    <p class="fs-6  text-white-50 mb-3 animated slideInDown">Fostering Good Governance: Strengthening Democracy for a Stable and Prosperous Society</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-key-color rounded-circle ms-2">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!-- Carousel End -->



        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-5"></h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{asset('img/corevalue.png')}}" alt="">
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
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
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
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
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
        {{-- About us end --}}

        {{-- Counter Start --}}
        {{-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-values">2,000,000+</div>
                            <div class="counter-label">2M citizens to actively participate in various levels of elections and contribute to violence free elections in Africa</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-values">8+</div>
                            <div class="counter-label">Years of existence</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-values">20,000+</div>
                            <div class="counter-label">Empower 20,000 African women and youths with livelihood skills and starter packs</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter">
                            <div class="counter-values">10,000+</div>
                            <div class="counter-label">Contribute to raising 10,000 detribalised and emotionally resilient African children</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- End Counter --}}

        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="../img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">2000000</h3>
                                <p>citizens to actively participate in various levels of elections and contribute to violence free elections in Africa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">8</h3>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">20000</h3>
                                <p>Empower 20,000 African women and youths with livelihood skills and starter packs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">10000</h3>
                                <p>Contribute to raising 10,000 detribalised and emotionally resilient African children</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        {{-- Documentry Start --}}
        <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Watch Now</div>
                        <h1 class="display-6 text mb-5">DOCUMENTARY ON RESPECT FOR CONSTITUTIONAL TERM LIMITS IN WEST AFRICA</h1>
                        <p class="text-white mb-0">The question of tenure elongation has moved from the sphere of normal devolution of power to the transitional context. It has become the main stake of the recent military-political transitions in West Africa.

                            The different coups d’état perpetrated by military elites in Mali (2020, 2021), Guinea (2021) and Burkina-Faso (2022) point out how complicated the allocation of a relevant time for a successful political transition is. It appears that the sanctions are no longer effective in deterring military coups or prolonging the stay of transition governments …</p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-white p-5">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CmORN8A1MnA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Documentry End --}}


        <!-- News and events Start -->
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
                                <img class="img-fluid" src="{{asset('img/courses-1.jpg')}}" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="{{ route ('blog')}}">
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
                                <img class="img-fluid" src="{{asset('img/courses-2.jpg')}}" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="{{ route ('blog')}}">
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
                                    <small>Political Tenure</small>
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
                                <img class="img-fluid" src="{{asset('img/courses-3.jpg')}}" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="{{ route ('blog')}}">
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
        <!-- News and events End -->
        

        <!-- Testimonial Start -->
        <div class="container-xl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Partners</div>
                    
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner1.jpg" style="max-width: 200px; margin: 0 auto;">
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner2.jpg" style="max-width: 200px; margin: 0 auto;">
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner3.jpg" style="max-width: 200px; margin: 0 auto;">
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner4.jpg" style="max-width: 200px; margin: 0 auto;">
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner5.jpg" style="max-width: 200px; margin: 0 auto;">
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner6.jpg" style="max-width: 200px; margin: 0 auto;">
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-3 mx-auto mb-4" src="img/partner7.png" style="max-width: 200px; margin: 0 auto;">
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Socials Start -->
        <div>
            <div class="container-xxl py-5">
                <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Socials</div>
                </div>
                <div class="row g-4 justify-content-center"> 
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgejfoundation&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId"
                            width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                        <a class="twitter-timeline"  href="https://twitter.com/Wisdomgeo_rge?ref_src=twsrc%5Etfw">Tweets by Wisdomgeo_rge</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div> --}}
                </div>
            </div>                 
        </div>
        <!-- Socials End -->

    </body>
@endsection
</html>