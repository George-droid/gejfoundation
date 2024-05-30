@extends('layouts.default')

@section('content')


<body>
    <!-- Page Heading -->
    <body>

        <div class="container mx-5">
            <div class="container-xxl bg-light my-2 py-2">
                <div class="container py-3">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Gallery</div>
                        <h1 class="display-6 mb-5">Look Through our Events and Activities</h1>
                    </div>
                    
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-5">
                         
                          <li class="page-item"><a class="page-link" href="#">All</a></li>
                          <li class="page-item"><a class="page-link" href="#">Events</a></li>
                          <li class="page-item"><a class="page-link" href="#">Charity</a></li>
                          <li class="page-item"><a class="page-link" href="#">Politics</a></li>
                          <li class="page-item"><a class="page-link" href="#">Goverment</a></li>
                          <li class="page-item"><a class="page-link" href="#">Goodluck Jonathan</a></li>
                          <li class="page-item"><a class="page-link" href="#">Donation</a></li>
                          <li class="page-item"><a class="page-link" href="#">Orphanage</a></li>
                          <li class="page-item"><a class="page-link" href="#">Work</a></li>
                        </ul>
                    </nav>
          
                    <div class="container py-3">
                        <div class="text-center mb-5">
                            <h1 class="display-6">Foundation Gallery</h1>
                        </div>
                        <div class="gallery-container row">
                            <!-- Gallery Item 1 -->
                            <div class="gallery-item col-lg-4 col-md-6 mb-4" data-images="https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF">
                                <div class="position-relative mt-auto">
                                    <img src="https://via.placeholder.com/400x300/FFFFFF" class="img-fluid border border-success" alt="Gallery Image 1">
                                    <div class="overlay">
                                        <div class="overlay-text px-1">Photos of Peace Conference 2024</div>
                                        <button class="btn btn-outline-primary view-button" aria-label="View Photos of Peace Conference 2024">
                                            View
                                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery Item 2 -->
                            <div class="gallery-item col-lg-4 col-md-6 mb-4" data-images="https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF">
                                <div class="position-relative mt-auto">
                                    <img src="https://via.placeholder.com/400x300/FFFFFF" class="img-fluid border border-success" alt="Gallery Image 2">
                                    <div class="overlay">
                                        <div class="overlay-text">Annual Meeting 2023 Highlights</div>
                                        <button class="btn btn-outline-primary view-button" aria-label="View Annual Meeting 2023 Highlights">
                                            View
                                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery Item 3 -->
                            <div class="gallery-item col-lg-4 col-md-6 mb-4" data-images="https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF, https://via.placeholder.com/300x200/FFFFFF">
                                <div class="position-relative mt-auto">
                                    <img src="https://via.placeholder.com/400x300/FFFFFF" class="img-fluid border border-success" alt="Gallery Image 3">
                                    <div class="overlay">
                                        <div class="overlay-text">Community Outreach Program 2022</div>
                                        <button class="btn btn-outline-primary view-button" aria-label="View Community Outreach Program 2022">
                                            View
                                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Recents</div>
                    </div>
                    <!-- Gallery Section -->
                    <div class="row" id="dynamic-gallery">
                        <!-- Dynamic images will be loaded here -->
                    </div>
                    
                    
                </div>
            </div>
        </div>
</body>

</html>

@endsection
</html>