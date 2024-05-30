@extends('layouts.waefDefault')

@section('content')
<body>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5">
                <h1 class="display-6">Members of the West African Elders Forum (WAEF)</h1>
            </div>
            <div class="row g-5">
                <!-- Member 1: Chief Olusegun Obasanjo -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="mt-5">
                            {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-1 mb-2  ">Our Founder</div> --}}
                            <h1 class="display-6 ">Chief Olusegun Obasanjo</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                            </div>
                            <p class="mb-5">President, Federal Republic of Nigeria (1999 - 2007)</p>
                            {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                              <img class="text-center  mb-4" src="https://via.placeholder.com/400x250" alt="Placeholder Image">
                        <h2 class="waef-members-name">His Excellency Chief Olusegun Obasanjo</h2>
                        <p>President, Federal Republic of Nigeria (1999 - 2007)</p>
                    </div>
                </div> --}}
                <!-- Member 2: Amos Sawyer -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute w-100 h-100 pt-3 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6 ">His Excellency Amos Sawyer</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                                    </div>
                                    <p class="mb-5">President, Republic of Liberia (1990 - 1994)</p>
                                    {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                              <img class="text-center  mb-4" src="https://via.placeholder.com/400x250" alt="Placeholder Image">
                        <h2 class="waef-members-name">His Excellency Amos Sawyer</h2>
                        <p>President, Republic of Liberia (1990 - 1994)</p>
                    </div>
                </div> --}}
                <!-- Member 3: Kadre Desire Quedraogo -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" mt-5">
                            {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-1 mb-2  ">Our Founder</div> --}}
                            <h1 class="display-6 ">His Excellency Kadre Desire Quedraogo</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                            </div>
                            <p class="mb-5">Prime Minister, Burkina Faso (1996 - 2000)</p>
                            {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                              <img class="text-center  mb-4" src="https://via.placeholder.com/400x250" alt="Placeholder Image">
                        <h2 class="waef-members-name">His Excellency Kadre Desire Quedraogo</h2>
                        <p>Prime Minister, Burkina Faso (1996 - 2000)</p>
                    </div>
                </div> --}}
                <!-- Member 4: Abdulsalami Abubakar -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute w-100 h-100 pt-3 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6 ">His Excellency Abdulsalami Abubakar</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                                    </div>
                                    <p class="mb-5">President, Federal Republic of Nigeria (1998 - 1999)</p>
                                    {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                              <img class="text-center  mb-4" src="https://via.placeholder.com/400x250" alt="Placeholder Image">
                        <h2 class="waef-members-name">His Excellency Abdulsalami Abubakar</h2>
                        <p>President, Federal Republic of Nigeria (1998 - 1999)</p>
                    </div>
                </div> --}}
                <!-- Member 5: Pedro Pires -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" mt-5">
                            {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-1 mb-2  ">Our Founder</div> --}}
                            <h1 class="display-6 ">His Excellency Pedro Pires</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                            </div>
                            <p class="mb-5">President, Cape Verde (2001 - 2011)</p>
                            {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                              <img class="text-center  mb-4" src="https://via.placeholder.com/400x250" alt="Placeholder Image">
                        <h2 class="waef-members-name">His Excellency Pedro Pires</h2>
                        <p>President, Cape Verde (2001 - 2011)</p>
                    </div>
                </div> --}}
                <!-- Member 6: Ellen Sirleaf Johnson -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute w-100 h-100 pt-3 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6 ">Her Excellency Madam Ellen Sirleaf Johnson</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                                    </div>
                                    <p class="mb-5">President, Republic of Liberia (2006 - 2018)</p>
                                    {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                              <img class="text-center  mb-4" src="https://via.placeholder.com/400x250" alt="Placeholder Image">
                        <h2 class="waef-members-name">Her Excellency Madam Ellen Sirleaf Johnson</h2>
                        <p>President, Republic of Liberia (2006 - 2018)</p>
                    </div>
                </div> --}}
                <!-- Member 7: Ernest Bai Koroma -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" mt-5">
                            {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-1 mb-2  ">Our Founder</div> --}}
                            <h1 class="display-6 ">His Excellency Ernest Bai Koroma</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                            </div>
                            <p class="mb-5">President, Sierra Leone (2007 - 2018)</p>
                            {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
              
                <!-- Member 8: Thomas Boni Yayi -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute w-100 h-100 pt-3 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6 ">His Excellency Thomas Boni Yayi</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                                    </div>
                                    <p class="mb-5">President, Republic of Benin (2006 - 2016)</p>
                                    {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Member 9: Dr. Goodluck Ebele Jonathan -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class=" mt-5">
                            {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-1 mb-2  ">Our Founder</div> --}}
                            <h1 class="display-6 ">His Excellency Dr. Goodluck Ebele Jonathan</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                            </div>
                            <p class="mb-5">President, Federal Republic of Nigeria (2011 - 2015)</p>
                            {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute w-100 h-100 pt-3 pe-5" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6 ">His Excellency Dioncounda Traore</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1">
                                    </div>
                                    <p class="mb-5">Acting President, Mali (2012 - 2013)</p>
                                    {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> --}}
                                </div>
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