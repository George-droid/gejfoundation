@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery Images</h1>
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
                    <form method="POST" action="{{ route('be.updateImages', ['id' => $images->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" name="title" class="form-control" id="title" value="{{ $images->title }}" aria-describedby="nameHelp">
                          <div id="name" class="form-text">The Title of the image's event.</div>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">thumbnail</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div> --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" value="{{ $images->description }}" aria-describedby="nameHelp">
                            <div id="description" class="form-text">Descrtiption of the member.</div>
                        </div>
                        <!-- Existing Image -->
                        <div class="mb-3">
                            <label for="existing_image" class="form-label">Existing Image</label>
                            <img src="{{ asset($images->image) }}" alt="Existing Image" class="img-fluid">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="collection_id" class="form-label">Category</label>
                            <select class="form-select" name="collection_id" id="collection_id">
                                    <option value="Choose ...">Please choose a category:</option>
                                    @foreach($collections as $collection)
                                    <option value="{{ $collection->id }}" {{ $collection->id == $images->collection_id ? 'selected' : '' }}>{{ $collection->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection