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
                <h1 class="fs-4 mb-5">Stay Updated with Our Latest Activities</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{asset('img/courses-1.jpg')}}" alt="News Image">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary">Political Analysis</span>
                            </div>
                            <h5 class="card-title">Coup d’états: Dangers of democratic disruption and African solutions</h5>
                            <p class="card-text">Coup d’états: Dangers of democratic disruption and African solutions A news analysis by Emmanuel Oloniruha, News Agency of Nigeria (NAN)…</p>
                            <div class="mt-auto">
                                <a href="{{ route('blog')}}" class="btn btn-outline-primary">
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
                    <div class="card h-100">
                        <img class="card-img-top" src="{{asset('img/courses-2.jpg')}}" alt="News Image">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary">Regional Governance</span>
                            </div>
                            <h5 class="card-title">Jonathan leads WAEF pre-election mission to Liberia</h5>
                            <p class="card-text">Former President Dr. Goodluck Ebele Jonathan leads the West African Elders Forum (WAEF) pre-election election mission to Liberia ahead of …</p>
                            <div class="mt-auto">
                                <a href="{{ route('blog')}}" class="btn btn-outline-primary">
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
                    <div class="card h-100">
                        <img class="card-img-top" src="{{asset('img/courses-3.jpg')}}" alt="News Image">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary">Political Tenor</span>
                            </div>
                            <h5 class="card-title">WAEF commends Macky Sall for declining third term</h5>
                            <p class="card-text">The West Africa Elders Forum (WAEF) has commended the president of Senegal Macky Sall for declining to run for a …</p>
                            <div class="mt-auto">
                                <a href="{{ route('blog')}}" class="btn btn-outline-primary">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more news cards as needed -->
            </div>
        </div>
    </div>

    <!-- Team Socuals -->
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
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                    <a class="twitter-timeline"  href="https://twitter.com/Wisdomgeo_rge?ref_src=twsrc%5Etfw">Tweets by Wisdomgeo_rge</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>                 
    </div>
    <!-- Team Socials -->

</body>

@endsection



</html>