@extends('layouts.default')

@section('content')
    <body>
        <div class="container-fluid donate my-2 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">The Goodluck Jonathan Foundation</div>
                        <h1 class="display-6 text-white mb-5"></h1>
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
        </div>
    
        <div class="container-xl py-3">
            <div class="container my-2 py-2">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Board Members</div>
                
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" mt-5">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-2  ">Our Founder</div>
                            <h1 class="display-6 mb-1">Goodluck Ebele Jonathan</h1>
                            <div class="bg-light border-bottom border-5 border-primary rounded p-2">
                                {{-- <p class="text-dark mb-2">
                                   "We understand that preserving and upholding democratic principles are prerequisites for any peaceful and prosperous nation."</p>
                                <span class="text-primary">- Goodluck Ebele Jonathan, Founder</span> --}}
                            </div>
                            <p class="mb-5">Goodluck Ebele Azikiwe Jonathan served as Nigeria's president from 2010 to 2015 and was the first incumbent president to concede defeat in an election, ensuring a peaceful transition of power. He previously served as vice president under Umaru Musa Yar'Adua from 2007 to 2010. In Bayelsa State, he was governor from 2005 to 2007 and deputy governor from 1999 to 2005. His presidency and human service  focused on economic development, energy, and infrastructure</p>
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
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/GoodluckJonathan.webp')}}" alt="" style="object-fit: cover;">
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
      
          <!-- Board Team Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-4">
                    {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid h-50" src="{{asset('img/gej.jpeg')}}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>H.E DR. Goodluck Ebele Jonathan GCFR, GCON</h5>
                                <p class="text-primary">Chairman</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href="mailto:your-email@example.com"><i class="fas fa-envelope"></i></a>
                                    <a class="btn btn-square" href="tel:your-phone-number"><i class="fas fa-phone"></i></a>
                                    <a class="btn btn-square" href="https://www.facebook.com/your-profile-or-page"><i class="fab fa-facebook-f"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid w-100 h-50" src="{{asset('img/3.jpeg')}}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-2">
                                <h5>Prof. Adebayo Olukoshi</h5>
                                <p class="text-primary">Board Member</p>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href="mailto:your-email@example.com"><i class="fas fa-envelope"></i></a>
                                    <a class="btn btn-square" href="tel:your-phone-number"><i class="fas fa-phone"></i></a>
                                    <a class="btn btn-square" href="https://www.facebook.com/your-profile-or-page"><i class="fab fa-facebook-f"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid h-50" src="{{asset('img/1.jpeg')}}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-2">
                                <h5> Late Dr. Innocent Chukwuma </h5>
                                <p class="text-primary">Board Member</p>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href="mailto:your-email@example.com"><i class="fas fa-envelope"></i></a>
                                    <a class="btn btn-square" href="tel:your-phone-number"><i class="fas fa-phone"></i></a>
                                    <a class="btn btn-square" href="https://www.facebook.com/your-profile-or-page"><i class="fab fa-facebook-f"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid h-50 " src="{{asset('img/4.jpeg')}}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-2">
                                <h5>Mrs Ann Iyonu</h5>
                                <p class="text-primary">Secretary of the Board </p>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href="mailto:your-email@example.com"><i class="fas fa-envelope"></i></a>
                                    <a class="btn btn-square" href="tel:your-phone-number"><i class="fas fa-phone"></i></a>
                                    <a class="btn btn-square" href="https://www.facebook.com/your-profile-or-page"><i class="fab fa-facebook-f"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Board End -->
       
        <!-- Team Start -->
        <div class="container-xxl ">
            <div class="container">
                <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Full Name</h5>
                                <p class="text-primary">Designation</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

    </body>
@endsection



</html>