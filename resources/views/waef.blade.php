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
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative overflow-hidden" style="min-height: 400px;">
                            <img class="position-absolute top-0 start-0 w-100 h-auto" src="{{asset('img/waef-logo.png')}}" alt="WAEF Logo">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 waef-header">ABOUT WAEF</div>
                        <h1 class="display-6 text-white mb-1"></h1>
                        <p class="text-white justified-text mb-0">
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
        {{-- </div> --}}

        <div class="container-xxl bg-light my-2 py-2">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 waef-header">Latest News from News Houses</div>
                </div>
                <div class="row g-4 justify-content-center">
                    <!-- News Item --> 
                    @foreach ($highlights as $highlight)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="news-item d-flex flex-column bg-white border rounded overflow-hidden h-100">
                                <div class="p-4">
                                    <h6 class="text-primary mb-3 waef-news-header">From {{ $highlight->house->name }}</h6>
                                    <h5 class="mb-3">{{ $highlight->title }}</h5>
                                    <p class="mb-3">{{ $highlight->excerpt }}</p>
                                    <a href="{{ $highlight->cta_link }}" class="btn btn-outline-primary read-more waef-btn">{{ $highlight->cta }}<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                    {{-- <!-- News Item 2: Vanguard News -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="news-item d-flex flex-column bg-white border rounded overflow-hidden h-100">
                            <div class="p-4">
                                <h6 class="text-primary mb-3 waef-news-header">From Vanguard News</h6>
                                <h5 class="mb-3">Healthcare Initiative: GEJ Foundation Partners with Local NGOs</h5>
                                <p class="mb-3 justified-text">Summary of the news article goes here. This is a brief overview of what the article is about.</p>
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
                                <p class="mb-3 justified-text">Summary of the news article goes here. This is a brief overview of what the article is about.</p>
                                <a href="#" class="btn btn-outline-primary read-more waef-btn">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
         
        <!-- Team Socuals -->
        <div>
            <div class="container-xxl py-5">
                <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3 waef-header">Our Socials</div>
                </div>
                <div class="row g-4 justify-content-center"> 
                    {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgejfoundation&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId"
                            width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                        {{-- <a class="twitter-timeline"  href="https://twitter.com/Wisdomgeo_rge?ref_src=twsrc%5Etfw">Tweets by Wisdomgeo_rge</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                        <a class="twitter-timeline" href="https://twitter.com/TheWAEF?ref_src=twsrc%5Etfw">Tweets by TheWAEF</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>                 
        </div>
        <!-- Team Socials -->

    </body>
@endsection
