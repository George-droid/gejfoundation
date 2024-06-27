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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">




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
                    {{-- <a href="{{ route ('about')}}" class="nav-item nav-link">Who We Are</a> --}}
                    <div class="nav-item dropdown">
                        <a href="{{ route ('about')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Who We Are</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('about')}}" class="dropdown-item">About Us</a>
                            <a href="{{ route ('board')}}" class="dropdown-item">Our Board</a>
                            <a href="{{ route ('team')}}" class="dropdown-item">Our Team  </a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="{{ route ('services')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">What We Do</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('services')}}" class="dropdown-item">Democracy and Elections</a>
                            <a href="{{ route ('security')}}" class="dropdown-item">Peace and Security </a>
                            <a href="{{ route ('empowerment')}}" class="dropdown-item">Women and Youth Empowerment  </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="{{ route ('waef')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">West African Elders Forum</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('waef')}}"class="dropdown-item">About WAEF</a>
                            <a href="{{ route ('waefmembers')}}" class="dropdown-item">Our Members</a>
                            <a href="{{ route ('waefworks')}}" class="dropdown-item">Our Works</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News And Media</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route ('blog')}}" class="dropdown-item">Latest News</a>
                            <a href="{{ route ('gejresources')}}" class="dropdown-item">Resources</a>
                            <a href="{{ route ('gejgallery')}}" class="dropdown-item">Gallery </a>
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
                        <a class="btn btn-square me-1" href="https://www.youtube.com/@goodluckjonathanfoundation1637"><i class="fab fa-youtube"></i></a>
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
                    <a class="btn btn-link" href="{{ route ('services')}}">Democracy and Elections</a>
                    <a class="btn btn-link" href="{{ route ('security')}}">Peace and Security</a>
                    <a class="btn btn-link" href="{{ route ('empowerment')}}">Women and Youth Empowerment</a>
                    <a class="btn btn-link" href="{{ route ('waef')}}">West African Elders Forum</a>
                    <a class="btn btn-link" href="{{ route ('blog')}}">Latest news</a>
                    <a class="btn btn-link" href="{{ route ('contact')}}">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Blog</h5> 
                    <p>News and Media.</p>
                    <div class="position-relative mx-auto mb-2" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                    <h5 class="text-light mt-2">Visit Counter</h5> 
                    <div class="counter-container mt-2">
                        
                        <div class="counter-item">THIS WEEK: <span id="week-visitors"></span></div>
                        <div class="divider"></div>
                        <div class="counter-item">TOTAL: <span id="total-visitors"></span></div>
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

    {{-- Gallery Image Modal --}}
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modalImage" class="img-fluid" src="" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Helper functions for cookies
        function setCookie(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "; expires=" + date.toUTCString();
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for(let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Helper function to get today's date as a string
        function getTodayDateString() {
            const today = new Date();
            return today.toISOString().split('T')[0];
        }

        // Helper function to get this week's start date as a string (Monday)
        function getWeekStartDateString() {
            const today = new Date();
            const firstDay = today.getDate() - today.getDay() + 1; // Adjust for week starting on Monday
            const weekStartDate = new Date(today.setDate(firstDay));
            return weekStartDate.toISOString().split('T')[0];
        }

        // Check if the user has a cookie set indicating a visit
        if (!getCookie('visited')) {
            // User is visiting for the first time, set the visited cookie
            setCookie('visited', 'true', 1); // Expires in 1 day

            // Get the current visit counts from local storage
            let totalVisits = localStorage.getItem('totalVisits') || 0;
            let weekVisits = localStorage.getItem('weekVisits') || 0;
            let lastWeekStartDate = localStorage.getItem('lastWeekStartDate');

            const currentWeekStartDate = getWeekStartDateString();

            // If the last visit week is not this week, reset this week's visit count
            if (lastWeekStartDate !== currentWeekStartDate) {
                weekVisits = 0;
                localStorage.setItem('lastWeekStartDate', currentWeekStartDate);
            }

            // Increment the visit counts
            totalVisits++;
            weekVisits++;

            // Store the updated counts in local storage
            localStorage.setItem('totalVisits', totalVisits);
            localStorage.setItem('weekVisits', weekVisits);
        }

        // Display the visit counts on the page
        document.getElementById('total-visitors').textContent = localStorage.getItem('totalVisits') || 0;
        document.getElementById('week-visitors').textContent = localStorage.getItem('weekVisits') || 0;
    </script>

    <script>
        $(document).ready(function(){
            $('[data-toggle="counter-up"]').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

    {{-- partners scripts --}}
    <script>
        new WOW().init();
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true, // Add autoplay property
                autoplayTimeout: 3000, // Set autoplay interval (3 seconds in this example)
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>

    {{-- Gallery image display --}}
    <script>
        $(document).ready(function() {
            $(".view-button").click(function() {
                var collectionId = $(this).data('collection');
                $.ajax({
                    type: "GET",
                    url: "{{ route('be.getImages', ':collectionId') }}".replace(':collectionId', collectionId),
                    success: function(images) {
                        $('#dynamic-gallery').empty();
                        images.forEach(function(image) {
                            var img = $('<img>').attr('src', image.image).addClass('img-fluid border border-success');
                            var col = $('<div>').addClass('col-md-3 mb-4').append(img);
                            $('#dynamic-gallery').append(col);
                        });
                    }
                });
            });
        });
    </script>
    
    {{-- Gallery modal script --}}
    <script>
        $(document).ready(function() {
            // Event delegation for dynamically loaded images
            $(document).on('mouseenter', '#dynamic-gallery img', function() {
                var src = $(this).attr('src');
                $('#modalImage').attr('src', src);
                $('#imageModal').modal('show');
            });
    
            // Hide modal when mouse leaves the image
            $(document).on('mouseleave', '#dynamic-gallery img', function() {
                $('#imageModal').modal('hide');
            });
        });
    </script>
        
</body>

</html>