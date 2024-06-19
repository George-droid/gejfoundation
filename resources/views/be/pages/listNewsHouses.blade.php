@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Highlights</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="card-body">
            <div class="col-lg-12 mb-4 mb-xl-0">
                <div class="demo-inline-spacing mt-3">
                    <table class="table">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($houses as $house)
                                <tr>
                                    <td>{{ $house->name }}</td>
                                    <td>
                                        <form action="{{ route('be.editNewsHouses', ['id' => $house->id]) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-info">Edit</button>
                                        </form>
                                        <form action="{{ route('be.deleteNewsHouses', ['id' => $house->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Layout Demo -->
    </div>
    

</div>
@endsection