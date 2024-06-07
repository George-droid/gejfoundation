@extends('layouts.waefDefault')

@section('content')
<body>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5">
                <h1 class="display-6">Members of the West African Elders Forum (WAEF)</h1>
            </div>
            <div class="row g-5">
                @foreach($members as $index => $member)
                    <div class="row g-5">
                        @if($index % 2 == 0)
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6">{{ $member->name }}</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                                    <p class="mb-2" style="font-weight: bold;">{{ $member->position }}</p>
                                    <p class="bio mb-5">{{ $member->description }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{ asset($member->image) }}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                        @else
                            <div class="container py-5">
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                            <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{ asset($member->image) }}" alt="" style="object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="mt-5">
                                            <h1 class="display-6">{{ $member->name }}</h1>
                                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                                            <p class="mb-2" style="font-weight: bold;">{{ $member->position }}</p>
                                            <p class="bio mb-5">{{ $member->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $members->links() }}
            </div>
            
            {{-- <div class="row g-5">
                <!-- Member 1: Chief Olusegun Obasanjo -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="mt-5">
                            <h1 class="display-6">Chief Olusegun Obasanjo</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                            <p class="mb-2" style="font-weight: bold;">President, Federal Republic of Nigeria (1999 - 2007)</p>
                            <p class="bio justified-text mb-5">Chief Olusegun Obasanjo is a Nigerian military and political leader who served as Nigeria’s head of state from 1976 to 1979 and later as its elected president from 1999 to 2007. He is known for his efforts in promoting democracy and economic development in Nigeria and Africa.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                
                <!-- Member 2: Amos Sawyer -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6">His Excellency Amos Sawyer</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                                    <p class="mb-2" style="font-weight: bold;">President, Republic of Liberia (1990 - 1994)</p>
                                    <p class="bio justified-text mb-5">Amos Sawyer served as the interim President of Liberia from 1990 to 1994. He is recognized for his efforts in peacebuilding and democratization in Liberia during a tumultuous period in the country's history.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Member 3: Kadre Desire Quedraogo -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="mt-5">
                            <h1 class="display-6">His Excellency Kadre Desire Quedraogo</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                            <p class="mb-2" style="font-weight: bold;">Prime Minister, Burkina Faso (1996 - 2000)</p>
                            <p class="bio justified-text mb-5">Kadre Desire Quedraogo is a Burkinabe politician who served as Prime Minister of Burkina Faso from 1996 to 2000. He has played significant roles in regional integration and economic development initiatives in West Africa.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                
                <!-- Member 4: Abdulsalami Abubakar -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6">His Excellency Abdulsalami Abubakar</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                                    <p class="mb-2" style="font-weight: bold;">President, Federal Republic of Nigeria (1998 - 1999)</p>
                                    <p class="bio justified-text mb-5">Abdulsalami Abubakar served as Nigeria's president from 1998 to 1999, overseeing the transition from military to civilian rule. He is lauded for his role in facilitating a peaceful transition to democracy in Nigeria.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Member 5: Pedro Pires -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="mt-5">
                            <h1 class="display-6">His Excellency Pedro Pires</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                            <p class="mb-2" style="font-weight: bold;">President, Cape Verde (2001 - 2011)</p>
                            <p class="bio justified-text mb-5">Pedro Pires is a Cape Verdean politician who served as the President of Cape Verde from 2001 to 2011. He is recognized for his contributions to the country's political stability and economic progress.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                
                <!-- Member 6: Ellen Sirleaf Johnson -->
                <div class="row g-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                                    <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="mt-5">
                                    <h1 class="display-6">Her Excellency Madam Ellen Sirleaf Johnson</h1>
                                    <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                                    <p class="mb-2" style="font-weight: bold;">President, Republic of Liberia (2006 - 2018)</p>
                                    <p class="bio justified-text mb-5">Ellen Johnson Sirleaf was the President of Liberia from 2006 to 2018, and she is the first elected female head of state in Africa. She is known for her efforts in promoting peace, economic development, and women's rights in Liberia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Member 7: Ernest Bai Koroma -->
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="mt-5">
                            <h1 class="display-6">His Excellency Ernest Bai Koroma</h1>
                            <div class="bg-light border-bottom border-5 waef-members-boarder border-primary rounded p-2 mb-1"></div>
                            <p class="mb-2" style="font-weight: bold;">President, Republic of Sierra Leone (2007 - 2018)</p>
                            <p class="bio justified-text mb-5">Ernest Bai Koroma served as the President of Sierra Leone from 2007 to 2018. He is credited with fostering economic growth and improving infrastructure in Sierra Leone during his tenure.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute top-0 start-0 w-100 h-auto img-fluid" src="{{asset('img/dummy.png')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</body>
@endsection
</html>