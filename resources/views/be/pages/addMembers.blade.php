@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Members</h1>
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
                    <form method="POST" action="{{ route('be.saveMembers') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                          <div id="name" class="form-text">The name of the members.</div>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" name="position" class="form-control" id="position" aria-describedby="nameHelp">
                            <div id="position" class="form-text">The members position.</div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" aria-describedby="nameHelp">
                            <div id="description" class="form-text">Descrtiption of the member.</div>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category" id="category">
                                    <option value="Choose ...">Please choose a category:</option>
                                    <option value="Member">Member</option>
                                    <option value="Board Member">Board Member</option>
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection