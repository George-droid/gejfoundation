@extends('layouts.default')

@section('content')


<body>
    <!-- Page Heading -->
    <body>

        <div class="container mx-5">
            <div class="container-xxl bg-light my-5 py-5">
                <div class="container py-5">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Gallery</div>
                        {{-- <h1 class="display-6 mb-5"></h1> --}}
                    </div>
    
            <!-- Carousel for Image Groups -->
                    <div id="imageGroupsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="row my-4">
                                <!-- Column for gallery images -->
                                <div class="col-md-4 mb-4">
                                    <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Image 1">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Image 2">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Image 3">
                                </div>
                                <!-- Add more images as needed -->
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#imageGroupsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#imageGroupsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            
                    <!-- Gallery Section -->
                    <div class="row my-4">
                        <!-- Column for gallery images -->
                        <div class="col-md-4 mb-4">
                            <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Image 1">
                        </div>
                        <div class="col-md-4 mb-4">
                            <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Image 2">
                        </div>
                        <div class="col-md-4 mb-4">
                            <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Image 3">
                        </div>
                        <!-- Add more images as needed -->
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

@endsection
</html>