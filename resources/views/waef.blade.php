@extends('layouts.waefDefault')

@section('content')
    <body>
        <!-- Page Header -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
            <div class="container mt-3 pt-3 text-center">
                <h1 class="display-4  animated slideInDown mb-4">West African Elders Forum</h1>
                <p class="lead">A credible Platform of eminent personalities who will provide mediation and interlocutory role in addressing electoral and democratic conflict in West Africa</p>
            </div>
        </div>
        

        <!-- About WAEF Section -->
        {{-- <div class="container-xxl py-5"> --}}
        <div class="container-fluid waef " data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 waef-header">ABOUT WAEF</div>
                        <h1 class="display-6 text-white mb-1"></h1>
                        <p class="text-white mb-0">
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
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/waef-logo.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        {{-- </div> --}}

        <div class="container-xxl bg-light my-2 py-2">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 waef-header">Latest News from Nigerian News Houses</div>
                </div>
                <div class="row g-4">
                    <!-- News Item 1: Punch News -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="news-item d-flex flex-column bg-white border rounded overflow-hidden h-100">
                            <div class="p-4">
                                <h6 class="text-primary mb-3 waef-news-header">From Punch News</h6>
                                <h5 class="mb-3">Empowering Youth: GEJ Foundation Launches Scholarship Program</h5>
                                <p class="mb-3">Summary of the news article goes here. This is a brief overview of what the article is about.</p>
                                <a href="#" class="btn btn-outline-primary read-more waef-btn">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Item 2: Vanguard News -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="news-item d-flex flex-column bg-white border rounded overflow-hidden h-100">
                            <div class="p-4">
                                <h6 class="text-primary mb-3 waef-news-header">From Vanguard News</h6>
                                <h5 class="mb-3">Healthcare Initiative: GEJ Foundation Partners with Local NGOs</h5>
                                <p class="mb-3">Summary of the news article goes here. This is a brief overview of what the article is about.</p>
                                <a href="#" class="btn btn-outline-primary read-more waef-btn">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- News Item 3: Daily Trust -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="news-item d-flex flex-column bg-white border rounded overflow-hidden h-100">
                            <div class="p-4">
                                <h6 class="text-primary mb-3 waef-news-header">From Daily Trust</h6>
                                <h5 class="mb-3">Education Initiative: GEJ Foundation Launches Literacy Campaign</h5>
                                <p class="mb-3">Summary of the news article goes here. This is a brief overview of what the article is about.</p>
                                <a href="#" class="btn btn-outline-primary read-more waef-btn">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        

        

    </body>
@endsection
