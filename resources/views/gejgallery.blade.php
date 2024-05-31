@extends('layouts.default')

@section('content')


<body>
    <div class="container">
            <div class="container bg-light my-2 py-2">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Gallery</div>
                    <h1 class="display-6 mb-5">Look Through our Events and Activities</h1>
                </div>
                
                <nav aria-label="Page navigation example" class="d-none d-lg-block">
                    <ul class="pagination justify-content-center mb-5">
                        <li class="page-item"><a class="page-link filter-link" data-category="All" href="#">All</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Events" href="#">Events</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Charity" href="#">Charity</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Politics" href="#">Politics</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Government" href="#">Government</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Goodluck Jonathan" href="#">Goodluck Jonathan</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Donation" href="#">Donation</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Orphanage" href="#">Orphanage</a></li>
                        <li class="page-item"><a class="page-link filter-link" data-category="Work" href="#">Work</a></li>
                    </ul>
                </nav>
            
               <div class="container py-3">
                    <div class="text-center mb-5">
                        <h1 class="display-6">Foundation Gallery</h1>
                    </div>
                    <div class="gallery-container row gx-4">
                        <!-- Gallery Item 1 -->
                        <div class="gallery-item col-lg-4 col-md-6 mb-4">
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
                        <div class="gallery-item col-lg-4 col-md-6 mb-4">
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
                        <div class="gallery-item col-lg-4 col-md-6 mb-4">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const viewButtons = document.querySelectorAll(".view-button");
            const filterLinks = document.querySelectorAll(".filter-link");
            const dynamicGallery = document.getElementById("dynamic-gallery");
            const galleryItems = document.querySelectorAll(".gallery-item");

            function filterGallery(category) {
                dynamicGallery.innerHTML = "";
                galleryItems.forEach(item => {
                    if (category === "All" || item.getAttribute("data-category") === category) {
                        const images = item.getAttribute("data-images").split(", ");
                        images.forEach(src => {
                            const col = document.createElement("div");
                            col.className = "col-md-3 mb-4";
                            const img = document.createElement("img");
                            img.src = src.trim();
                            img.className = "img-fluid border border-success";
                            img.alt = "Gallery Image";
                            img.onload = () => img.classList.add("show");
                            col.appendChild(img);
                            dynamicGallery.appendChild(col);
                        });
                    }
                });
            }

            viewButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const galleryItem = this.closest(".gallery-item");
                    const images = galleryItem.getAttribute("data-images").split(", ");
                    dynamicGallery.innerHTML = "";
                    images.forEach(src => {
                        const col = document.createElement("div");
                        col.className = "col-md-3 mb-4";
                        const img = document.createElement("img");
                        img.src = src.trim();
                        img.className = "img-fluid border border-success";
                        img.alt = "Gallery Image";
                        img.onload = () => img.classList.add("show");
                        col.appendChild(img);
                        dynamicGallery.appendChild(col);
                    });
                });
            });

            filterLinks.forEach(link => {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const category = this.getAttribute("data-category");
                    filterGallery(category);
                });
            });

            // Initial load
            filterGallery("All");
        });
    </script>
</body>

</html>

@endsection
</html>