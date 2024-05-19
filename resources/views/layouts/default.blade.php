<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GEJ Foundation - Promoting Peace and Properity</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-0 px-lg-5 sticky-top wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route ('home')}}" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ asset('img/gejf_logo.png') }}"
                alt="GEJ FOundation Logo"/>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 mt-1 p-lg-0">
                    <a href="{{ route ('home')}}" class="nav-item nav-link ">Home</a>
                    <a href="{{ route ('about')}}" class="nav-item nav-link">Who We Are</a>
                    <div class="nav-item dropdown">
                        <a href="{{ route ('services')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">What We Do</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('services')}}" class="dropdown-item">Democracy and Elections</a>
                            <a href="{{ route ('security')}}" class="dropdown-item">Peace and Security </a>
                            <a href="{{ route ('services')}}" class="dropdown-item">Women and Youth Empowerment  </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="{{ route ('waef')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">West African Elders Forum</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('waef')}}"class="dropdown-item">About WAEF</a>
                            <a href="{{ route ('waef')}}" class="dropdown-item">Our Members</a>
                            <a href="{{ route ('waef')}}" class="dropdown-item">Our Works</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="{{ route ('blog')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News And Media</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('blog')}}" class="dropdown-item">Latest News</a>
                            <a href="{{ route ('blog')}}" class="dropdown-item">Resources</a>
                            <a href="{{ route ('gallery')}}" class="dropdown-item">Gallery </a>
                        </div>
                    </div>
                    <a class="nav-item nav-link"></a>
                </div>
                <div class="  ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="{{ route ('contact')}}">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
   
    <!-- Navbar End -->

    @yield('content')
   
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">GEJ <br><span class="text-white">Foundation</span></h1>
                    <p>Promoting Peace And Prosperity</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="https://twitter.com/gejfoundation?lang=en"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href="https://www.facebook.com/gejfoundation/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="https://twitter.com/gejfoundation?lang=en"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="https://ng.linkedin.com/company/goodluck-jonathan-foundation"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>7B. Taraba Close, Maitama FCT-Abuja, Nigeria</p>
                    <p><i class="fa fa-envelope me-3"></i>info@gejfoundation.org</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="{{ route ('about')}}">Who We Are</a>
                    <a class="btn btn-link" href="{{ route ('services')}}">What We Do</a>
                    <a class="btn btn-link" href="{{ route ('services')}}">Our Services</a>
                    <a class="btn btn-link" href="{{ route ('contact')}}">Support</a>
                    <a class="btn btn-link" href="{{ route ('contact')}}">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Blog</h5>
                    <p>News and Media.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="{{ route ('home')}}">Goodluck Jonathan Foundation</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        {{-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>