@extends('layouts.default')

@section('content')
    <body>
        
            <!-- About Start -->
            {{-- <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                <img class="position-absolute w-100 h-100 pt-3 pe-5" src="{{asset('img/2.jpeg')}}" alt="" style="object-fit: cover;">
                                <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="{{asset('img/mission.png')}}" alt="" style="width: 200px; height: 200px;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Who We Are</div>
                                <h1 class="display-6 mb-2">We Promote Peace and Prosperity Around the World</h1>
                                <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                                    <p class="text-dark mb-2">
                                        We understand that preserving and upholding democratic principles are prerequisites for any peaceful and prosperous nation.</p>
                                    <span class="text-primary">Goodluck Ebele Jonathan, Founder</span>
                                </div>
                                <p class="mb-5">Through initiatives such as electoral reform, enhancing women and youth participation in elections, and mobilizing for violence-free elections in Nigeria, we aim to create positive change. Additionally, we are committed to nurturing 10,000 detribalized and emotionally resilient Nigerian children. Together, we're building a brighter future for Africa.</p>
                                <div class="d-flex">
                                    <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                    <a class="btn btn-outline-primary px-3" href="{{ asset('contact') }}">
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
            </div> --}}
            <!-- About End -->

            
            
        {{-- <div class="container-fluid donate my-2 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Who We Are</div>
                        <h1 class="display-6 text-white mb-3">The Goodluck Jonathan Foundation</h1>
                        <p class="text-white mb-0">The Goodluck Jonathan Foundation, founded by the former President of Nigeria (2010-2015) is an independent non-governmental organization established in 2015 for the advancement of peace and prosperity on the African continent.

                            We are dedicated to promoting peace and reconciliation, advancing democratic governance, advocating for inclusive governance and economic development, promoting citizen’s rights, and continental and national integration.</p>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-white p-5">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/GAgrr2V7LDI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}} 
    
        <div class="container-xl py-3">
            <div class="container my-2 py-2">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Board Members</div>
                </div>
                   <!-- Board Team Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-4">
                    @foreach ($boardMembers as $boardMember)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid w-100 " src="{{asset($boardMember->image)}}" alt="">
                                </div>
                                <div class="team-text bg-light text-center p-2">
                                    <h5>{{ $boardMember->name }}</h5>
                                    <p class="text-primary">{{ $boardMember->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('img/1.jpeg')}}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-2">
                                <h5> Late Dr. Innocent Chukwuma </h5>
                                <p class="text-primary">Board Member</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('img/4.jpeg')}}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-2">
                                <h5>Mrs Ann Iyonu</h5>
                                <p class="text-primary">Secretary of the Board </p>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
        </div>
        <!-- Board End -->
       
              
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
                        {{-- <a class="twitter-timeline"  href="https://twitter.com/Wisdomgeo_rge?ref_src=twsrc%5Etfw">Tweets by Wisdomgeo_rge</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                        <a class="twitter-timeline" href="https://twitter.com/GEJFoundation?ref_src=twsrc%5Etfw">Tweets by GEJFoundation</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>                 
        </div>
        <!-- Team Socials -->

    </body>
@endsection



</html>