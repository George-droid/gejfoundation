@extends('layouts.default')

@section('content')
    <body>
        <div class="container-xl py-3">
            <div class="container my-2 py-2">
             
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" mt-5">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-1 mb-2  ">Our Founder</div>
                            <h1 class="display-6 ">Goodluck Ebele Jonathan</h1>
                            <div class="bg-light border-bottom border-5 border-primary rounded p-2 mb-1">
                                {{-- <p class="text-dark mb-2">
                                "We understand that preserving and upholding democratic principles are prerequisites for any peaceful and prosperous nation."</p>
                                <span class="text-primary">- Goodluck Ebele Jonathan, Founder</span> --}}
                            </div>
                            <p class="mb-5 justified-text">Goodluck Ebele Jonathan GCFR GCON served as Nigeria's president from 2010 to 2015 and was the first incumbent president to concede defeat in an election, ensuring a peaceful transition of power. He previously served as vice president under Umaru Musa Yar'Adua from 2007 to 2010. In Bayelsa State, he was governor from 2005 to 2007 and deputy governor from 1999 to 2005. His presidency and human service  focused on economic development, energy, and infrastructure</p>
                            <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                            {{-- <a class="btn btn-outline-primary py-2 px-3" href="{{ route ('contact')}}">
                                Contact Us
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/Presidentgoodluck.jpeg')}}" alt="" style="object-fit: cover;">
                        
                        </div>
                    </div>
                
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
