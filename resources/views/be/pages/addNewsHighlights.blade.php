@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add News Highlights</h1>
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
                    <form method="POST" action="{{ route('be.saveNewsHighlights') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" name="title" class="form-control" id="title" aria-describedby="nameHelp">
                          <div id="title" class="form-text">The Title of the News Highlights.</div>
                        </div>
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <input type="text" name="excerpt" class="form-control" id="excerpt" aria-describedby="nameHelp">
                            <div id="excerpt" class="form-text">The excerpt for the Hughlight.</div>
                        </div>
                        <div class="mb-3">
                            <label for="cta" class="form-label">Add call-to-action</label>
                            <input type="text" name="cta" class="form-control" id="cta" aria-describedby="nameHelp">
                            <div id="cta" class="form-text">The text on the call to action button.</div>
                        </div>
                        <div class="mb-3">
                            <label for="cta_link" class="form-label">Add call-to-action link</label>
                            <input type="text" name="cta_link" class="form-control" id="cta_link" aria-describedby="nameHelp">
                            <div id="cta_link" class="form-text">The link for the call to action button.</div>
                        </div>
                        <div class="mb-3">
                            <label for="house_id" class="form-label">News House</label>
                            <select class="form-select" name="house_id" id="house_id">
                                @foreach($houses as $house)
                                    <option value="{{ $house->id }}">{{ $house->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection