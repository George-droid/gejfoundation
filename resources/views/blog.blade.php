@extends('layouts.default')

@section('content')
<body>
    <div class="container-xxl bg-light my-1 ">
        
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Latest News</div>
                <h1 class="display-6 mb-5">All News And Media</h1>
            </div>
            <div class="container mt-4">
                <div class="row">
                  <!-- Main Content -->
                    <div class="col-md-8">
                        @foreach($newsItems as $news)
                            <div class="card mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                <img src="{{ asset($news->image) }}" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $news->title }}</h5>
                                    <p class="card-text">{{ $news->created_at->format('F j, Y') }}</p>
                                    <p class="card-text">{!! Str::limit($news->content, 200) !!}</p>
                                    <div class="card-footer">
                                        <a href="{{ route('blogpage', $news->slug) }}" class="card-link">Read More</a>
                                        {{-- <a href="{{ route('news.show', $news->id) }}#comments" class="card-link">Comments: {{ $news->comments_count }}</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Pagination Links -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $newsItems->links() }}
                            </ul>
                        </nav>
                        {{-- <div class="card mb-4">
                            <img src="{{asset('img/courses-1.jpg')}}" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Coup d’états: Dangers of democratic disruption and African solutions</h5>
                                <p class="card-text">August 6, 2023</p>
                                <p class="card-text">A news analysis by Emmanuel Oloniruha, News Agency of Nigeria (NAN)
                                    Recent happenings in West Africa points the fact of the danger democracy and good governance are facing in the region. The military takeover in Mali, Chad, Burkina Faso, Sudan and Niger Republic showed the fragility of moving West Africa out of its challenge of poverty, low infrastructure and globalisation.</p>
                                <div class="card-footer">
                                <a href="{{ route ('blogpage')}}" class="card-link">Read More</a>
                                <a href="{{ route ('blogpage')}}" class="card-link">Comments: 3</a>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <img src="{{asset('img/courses-2.jpg')}}" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Jonathan leads WAEF pre-election mission to Liberia</h5>
                                <p class="card-text">July 11, 2023</p>
                                <p class="card-text">Former President Dr. Goodluck Ebele Jonathan leads the West African Elders Forum (WAEF) pre-election election mission to Liberia ahead of the country’s general elections scheduled for October.

                                Jonathan, who departed Abuja for Monrovia on Tuesday morning, is joined in the mission by former Burkinabe prime minister and one-time president of the Economic Community of West African States (ECOWAS) Kadre Ouedraogo and other leaders from the subregion. The mission, which also includes staff from the WAEF secretariat, will assess the preparedness of stakeholders ahead of the election.</p>
                                <div class="card-footer">
                                    <a href="{{ route ('blogpage')}}" class="card-link">Read More</a>
                                <a href="{{ route ('blogpage')}}" class="card-link">Comments: 3</a>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <img src="{{asset('img/courses-3.jpg')}}" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">WAEF commends Macky Sall for declining third term</h5>
                                <p class="card-text">July 5, 2023</p>
                                <p class="card-text">The West Africa Elders Forum (WAEF) has commended the president of Senegal Macky Sall for declining to run for a third in the 2024 presidential election. A decision the organization describes as sacrificial, one taken in the best interest of the nation.

                                    Convener of the Forum and former President of Nigeria, Dr Goodluck Ebele Jonathan in a letter addressed to Macky Sall on behalf of the Forum referred to the President’s action as a display of exemplary leadership, a gesture worthy of emulation by other leaders.</p>
                                <div class="card-footer">
                                    <a href="{{ route ('blogpage')}}" class="card-link">Read More</a>
                                    <a href="{{ route ('blogpage')}}" class="card-link">Comments: 3</a>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <img src="{{asset('img/blog-4.jpg')}}" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">WAEF, AU, ECOWAS, Commonwealth appeal for calm in Sierra Leone</h5>
                                <p class="card-text">June 28, 2023</p>
                                <p class="card-text">The West Africa Elders Forum(WAEF) in conjunction with African Union, ECOWAS and Commonwealth has called for calm in Sierra Leone and urged citizens to desist from inflammatory rhetoric that is capable of jeopardizing the nation’s peace and undermining the democratic process of the country.

                                    The heads of international observation missions in Sierra Leone in a joint statement signed by Goodluck Jonathan, for WAEF, Hailemariam Dasalegn Boshe, Africa Union, Mohamed Ibn Chambas for ECOWAS, and Yemi Osibanjo for Commonwealth, said it was disturbed by the inflammatory language circulating on the social media and appealed to the citizens of Sierra Leone to continue to exercise restraint concerning the outcome of the elections.</p>
                                <div class="card-footer">
                                    <a href="{{ route ('blogpage')}}" class="card-link">Read More</a>
                                    <a href="{{ route ('blogpage')}}" class="card-link">Comments: 3</a>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <img src="{{asset('img/blog-5.jpeg')}}" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Jonathan arrives Freetown, leads WAEF election mission to Sierra Leone</h5>
                                <p class="card-text">June 21, 2023</p>
                                <p class="card-text">The West African Elders Forum (WAEF) 2023 Election Mission to Sierra Leone has arrived in Freetown to encourage and support a peaceful democratic transition ahead of the country’s general election scheduled for this weekend, June 24.

                                    Former Nigerian President and Chair of the Forum, Goodluck Ebele Jonathan, is the head of the mission. The team also has former Burkinabe prime minister and one-time president of the Economic Community of West African States (ECOWAS) Kadre Ouedraogo and staff from the WAEF secretariat as members.
                                    
                                    In an arrival statement, Wealth Dickson Ominabo, Communications Officer of the Goodluck Jonathan Foundation, host of the WAEF secretariat quoted the head of mission as saying that:
                                    
                                    “The mission urges citizens of Sierra Leone to approach the election with utmost patriotism by prioritizing the nation’s peace and stability and refrain from acts capable of undermining the nation’s democracy.”</p>
                                <div class="card-footer">
                                    <a href="{{ route ('blogpage')}}" class="card-link">Read More</a>
                                    <a href="{{ route ('blogpage')}}" class="card-link">Comments: 3</a>
                                </div>
                            </div>
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav> --}}
                    
                    </div>

                    
                    
                    <!-- Sidebar -->
                        <div class="col-md-4">
                            <!-- Tags Section -->
                            <div class="card mb-4">
                                <div class="card-header">Tags</div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        @foreach($tags as $tag)
                                        <li><a href="{{ route('blog', ['tag' => $tag->name]) }}">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                    
                            <!-- Categories Section -->
                            <div class="card mb-4">
                                <div class="card-header">Categories</div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        @foreach($categories as $category)
                                        <li><a href="{{ route('blog', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
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