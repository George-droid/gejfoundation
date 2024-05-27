@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Resource Items</h1>
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
                    <form method="POST" action="{{ route('be.saveImages') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" name="title" class="form-control" id="title" aria-describedby="nameHelp">
                          <div id="name" class="form-text">The Title of the image's event.</div>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">thumbnail</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div> --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" aria-describedby="nameHelp">
                            <div id="description" class="form-text">Descrtiption of the member.</div>
                        </div>
                        <div class="mb-3">
                            <label for="path" class="form-label">Image</label>
                            <input type="file" name="path" class="form-control" id="path">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category" id="category">
                                    {{-- <option value="Choose ...">Please choose a category:</option> --}}
                                    <option value="WAEF">WAEF</option>
                                    <option value="Election">Election</option>
                                    <option value="Government">Government</option>
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