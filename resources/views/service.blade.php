@extends('layouts.default')

@section('content')
<body>
    <div class="container-xxl  mt-2">
        <div class="container pt-5 mt-2">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-7 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pe-5" src="{{asset('img/banner3.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class=" mt-2">
                        <h1 class=" mb-1">Democracy and Elections</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-2 mb-3">
                        </div>
                        <p class="fs-5 mb-5"> We provide comprehensive support for democratic governance, offering services such as election monitoring, voter education, capacity building for institutions, and advocacy for fair electoral processes.</p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>  
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Latest News</div>
                {{-- <h1 class="display-6 mb-5"></h1> --}}
            </div>
            <div class="row g-4 justify-content-center">
                
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
                            <img class="img-fluid w-100" src="{{asset('img/courses-2.jpg')}}" alt="">
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
                            <img class="img-fluid w-100" src="{{asset('img/courses-3.jpg')}}" alt="">
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



</body>

@endsection



</html>