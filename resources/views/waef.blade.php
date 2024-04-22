@extends('layouts.default')

@section('content')
    <body>
        <!-- Page Header -->
        <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <h1 class="display-4 text-white animated slideInDown mb-4">West African Elders Forum</h1>
                <p class="lead">A home-grown and non-partisan platform of past heads of state and government in West Africa.</p>
            </div>
        </div>
        =

        <!-- About WAEF Section -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>About WAEF</h2>
                        <p>The West African Elder’s Forum is an initiative of the Goodluck Jonathan Foundation established in 2021...</p>
                        <p>...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet Our Members Section -->
        <div class="container-xxl py-5">
            <div class="container">
                <h2>Meet Our Members</h2>
                <!-- Carousel or Grid layout for members' profiles -->
                <div id="members-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Add carousel items here -->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('img/member1.jpg')}}" alt="Member Image">
                            <div class="carousel-caption">
                                <h3>His Excellency Chief Olusegun Obasanjo</h3>
                                <p>President, Federal Republic of Nigeria (1999 - 2007)</p>
                            </div>
                        </div>
                        <!-- Add more carousel items for each member -->
                    </div>
                    <!-- Carousel controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#members-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#members-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Alternative: Grid layout for members' profiles -->
                <div class="row g-4">
                    <div class="col-lg-3 col-md-4">
                        <!-- Member card -->
                        <div class="card">
                            <img src="{{asset('img/member1.jpg')}}" class="card-img-top" alt="Member Image">
                            <div class="card-body">
                                <h5 class="card-title">His Excellency Chief Olusegun Obasanjo</h5>
                                <p class="card-text">President, Federal Republic of Nigeria (1999 - 2007)</p>
                                <!-- Add modal or link to member's profile -->
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards for each member -->
                </div>
            </div>
        </div>

        <!-- Latest News Section -->
        <div class="container-xxl bg-light my-5 py-5">
            <div class="container">
                <h2>Latest News</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <!-- Blog post card -->
                        <div class="card">
                            <img src="{{asset('img/blog-post1.jpg')}}" class="card-img-top" alt="Blog Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Coup d'états: Dangers of democratic disruption and African solutions</h5>
                                <p class="card-text">A news analysis by Emmanuel Oloniruha, News Agency of Nigeria (NAN)...</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards for each blog post -->
                </div>
            </div>
        </div>

        

    </body>
@endsection
