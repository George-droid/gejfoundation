@extends('layouts.default')

@section('content')
    <body>
        <!-- Page Header -->
        <div class="container-fluid page-header pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container pt-5 mt-5  text-center">
                <h1 class="display-4  animated slideInDown mb-4">West African Elders Forum</h1>
                <p class="lead">A home-grown and non-partisan platform of past heads of state and government in West Africa.</p>
            </div>
        </div>
        

        <!-- About WAEF Section -->
        <div class="container-xxl py-5">
            <div class="container-fluid donate " data-parallax="scroll" data-image-src="img/carousel-2.jpg">
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-10 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">ABOUT WAEF</div>
                            <h1 class="display-6 text-white mb-5">WEST AFRICAN ELDERS FORUM</h1>
                            <p class="text-white-50 mb-0">
                                The West African Elder’s Forum is an initiative of the Goodluck Jonathan
                                Foundation established in 2021 to serve as a home-grown and
                                non-partisan platform of past heads of state and government in West
                                Africa.
                                The Forum aims to draw on the experience and standing of its members to
                                provide advisory, mediation and conflict resolution support services to the
                                political leaders of the sub-region. It also works on various
                                democracy-promotion, peace and security and governance initiatives in
                                the sub-region.
                                Its overarching motivation is to work with other stakeholders to limit
                                instability and violence and to advance the integrity of the democratic
                                process. To this end, WAEF nurtures active collaboration with bodies such
                                as ECOWAS, UNOWAS and other relevant stakeholders in the sub-region.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet Our Members Section -->
        <div class="container-xxl py-5">
            <div class="container">
                <h2 class="d-inline-block rounded-pill bg-secondary text-primary text-center  py-1 px-5 mb-3">Meet Our Members</h2>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('img/1.jpg')}}" class="card-img-top" alt="Member Image">
                            <div class="card-body">
                                <h5 class="card-title">His Excellency Chief Olusegun Obasanjo</h5>
                                <p class="card-text">President, Federal Republic of Nigeria (1999 - 2007)</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('img/1.jpg')}}" class="card-img-top" alt="Member Image">
                            <div class="card-body">
                                <h5 class="card-title">His Excellency Chief Olusegun Obasanjo</h5>
                                <p class="card-text">President, Federal Republic of Nigeria (1999 - 2007)</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('img/1.jpg')}}" class="card-img-top" alt="Member Image">
                            <div class="card-body">
                                <h5 class="card-title">His Excellency Chief Olusegun Obasanjo</h5>
                                <p class="card-text">President, Federal Republic of Nigeria (1999 - 2007)</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img src="{{asset('img/1.jpg')}}" class="card-img-top" alt="Member Image">
                            <div class="card-body">
                                <h5 class="card-title">His Excellency Chief Olusegun Obasanjo</h5>
                                <p class="card-text">President, Federal Republic of Nigeria (1999 - 2007)</p>
                               
                            </div>
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
                                <img class="img-fluid" src="{{asset('img/courses-2.jpg')}}" alt="">
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
                                <img class="img-fluid" src="{{asset('img/courses-3.jpg')}}" alt="">
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

        

    </body>
@endsection
