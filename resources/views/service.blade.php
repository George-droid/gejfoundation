@extends('layouts.default')

@section('content')
<body>
    <div class="container-xxl py-5 my-5">
        <div class="container py-5 my-5">
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


</body>

@endsection



</html>