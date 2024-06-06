@extends('layouts.default')

@section('content')
<body>
    <div class="container-xxl bg-light my-1 ">
        
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Works</div>
                <h1 class="display-6 mb-5">WAEF News And Media</h1>
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