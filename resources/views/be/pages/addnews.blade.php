@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add News</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-10 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('be.saveNews') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">News Title</label>
                          <input type="text" name="title" class="form-control" id="title" aria-describedby="nameHelp">
                          <div id="name" class="form-text">The title of the news.</div>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" aria-describedby="nameHelp">
                            <div id="name" class="form-text">First few words from title to appear on the link of the news' page.</div>
                        </div>
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <input type="text" name="excerpt" class="form-control" id="excerpt" aria-describedby="nameHelp">
                            <div id="name" class="form-text">First sentence or phrase used as a brief on the homepage.</div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <input type="text" name="content" class="form-control" id="mytextarea" aria-describedby="nameHelp">
                            <div id="name" class="form-text">First sentence or phrase used as a brief on the homepage.</div>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            @foreach($tags as $tag)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag{{ $tag->id }}">
                                    <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" name="image" class="form-control" id="image">
                        </div>
                        {{-- <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection