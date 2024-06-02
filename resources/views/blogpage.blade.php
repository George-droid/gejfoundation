@extends('layouts.default')

@section('content')
<body>
    <div class="container-xxl bg-light my-1">
        <div class="container py-4">
            <div class="text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="fs-3 mb-4">{{ $news->title }}</h1>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <img src="{{ asset($news->image) }}" class="img-fluid col-12" alt="Post Image" style="height: 300px; object-fit: cover;">
                        </div>
                        <div class="text-justify">
                            <p class="lead">{{ \Carbon\Carbon::parse($news->published_at)->format('j F, Y') }}</p>
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
