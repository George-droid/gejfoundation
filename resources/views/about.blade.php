@extends('layouts.default')

@section('content')
    <body>
        <div class="container-xxl py-5 px-5">
            <div class="container">
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

    </body>
@endsection



</html>