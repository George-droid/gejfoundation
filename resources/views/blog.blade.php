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
            <body>
                <!-- Start Top Bar -->
                <div class="top-bar">
                    <div class="top-bar-left">
                        <ul class="menu">
                            <li class="menu-text">Yeti Agency</li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu">
                            <li><a href="#">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                            <li><a href="#">Four</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Top Bar -->
            
                <!-- Blog Header -->
                <div class="callout large primary">
                    <div class="row column text-center">
                        <h1>Our Blog</h1>
                    </div>
                </div>
            
                <!-- Blog Content -->
                <div class="row" id="content">
                    <!-- Blog Posts -->
                    <div class="medium-8 columns">
                        <!-- Blog Post Template -->
                        <div class="blog-post">
                            <h3>Awesome blog post title <small>3/6/2015</small></h3>
                            <img class="thumbnail" src="https://placehold.it/850x350" alt="Blog image">
                            <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
                            <div class="callout">
                                <ul class="menu simple">
                                    <li><a href="#">Author: Mike Mikers</a></li>
                                    <li><a href="#">Comments: 3</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Repeat the blog post template as needed -->
                    </div>
                    <!-- Sidebar -->
                    <div class="medium-3 columns sticky-container" data-sticky-container="">
                        <div class="sticky" data-sticky="wdasix-sticky" data-anchor="content" data-resize="zddghy-sticky" data-events="resize">
                            <!-- Categories -->
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Skyler</a></li>
                                <li><a href="#">Jesse</a></li>
                                <li><a href="#">Mike</a></li>
                                <li><a href="#">Holly</a></li>
                            </ul>
                            <!-- Authors -->
                            <h4>Authors</h4>
                            <ul>
                                <li><a href="#">Skyler</a></li>
                                <li><a href="#">Jesse</a></li>
                                <li><a href="#">Mike</a></li>
                                <li><a href="#">Holly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <!-- Pagination -->
                <div class="row column">
                    <ul class="pagination" role="navigation" aria-label="Pagination">
                        <li class="disabled">Previous</li>
                        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                        <li><a href="#" aria-label="Page 2">2</li>
                        <li><a href="#" aria-label="Page 3">3</li>
                        <li><a href="#" aria-label="Page 4">4</li>
                        <li class="ellipsis"></li>
                        <li><a href="#" aria-label="Page 12">12</a></li>
                        <li><a href="#" aria-label="Page 13">13</a></li>
                        <li><a href="#" aria-label="Next page">Next</a></li>
                    </ul>
                </div>
            
                <!-- JavaScript -->
                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
            </body>
        </div>
    </div>
</body>
@endsection



</html>