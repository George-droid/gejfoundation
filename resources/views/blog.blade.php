@extends('layouts.default')

@section('content')
<body>
    <div class="container-xxl bg-light my-5 py-5">
        
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