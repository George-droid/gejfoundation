@extends('layouts.default')

@section('content')
<body>
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
        <div class="container py-5">
            <div class="container mt-4">
                <div class="row">
                  <!-- Main Content -->
                  <div class="col-md-8">
                    <!-- Blog Post -->
                    <div class="card mb-4">
                      <img src="https://placehold.it/850x350" class="card-img-top" alt="Post Image">
                      <div class="card-body">
                        <h5 class="card-title">Awesome Blog Post Title</h5>
                        <p class="card-text">3/6/2015</p>
                        <p class="card-text">Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue...</p>
                        <div class="card-footer">
                          <a href="#" class="card-link">Author: Mike Mikers</a>
                          <a href="#" class="card-link">Comments: 3</a>
                        </div>
                      </div>
                    </div>
                    <!-- Repeat Blog Posts as necessary -->
                  </div>
            
                  <!-- Sidebar -->
                  <div class="col-md-4">
                    <!-- Categories Section -->
                    <div class="card mb-4">
                      <div class="card-header">Categories</div>
                      <div class="card-body">
                        <ul class="list-unstyled">
                          <li><a href="#">Category 1</a></li>
                          <li><a href="#">Category 2</a></li>
                          <li><a href="#">Category 3</a></li>
                          <li><a href="#">Category 4</a></li>
                        </ul>
                      </div>
                    </div>
            
                    <!-- Authors Section -->
                    <div class="card mb-4">
                      <div class="card-header">Authors</div>
                      <div class="card-body">
                        <ul class="list-unstyled">
                          <li><a href="#">Author 1</a></li>
                          <li><a href="#">Author 2</a></li>
                          <li><a href="#">Author 3</a></li>
                          <li><a href="#">Author 4</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Main Content and Sidebar -->
        </div>
    </div>
</body>
@endsection



</html>