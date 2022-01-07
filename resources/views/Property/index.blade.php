{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PROPERTY DETAILS
                            <a href="{{url('property')}}" class="btn btn-primary float-end">Add Student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>How to Fetch data in Laravel 8</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Agency ID</th>
                                <th>Type ID</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($property as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->Description }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->images }}</td>
                                <td>{{ $item->agency->name }}</td>
                                <td>{{ $item->property_type->type }}</td>
                                {{-- <td>{{ $item->section }}</td> --}}
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>




                    <div class="row">
                        @foreach ($property as $item)
                        <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                            <a class="thumbnail" href="#">
                                <img class="img-responsive" src="{{ asset('uploads/property/' . $item->images) }}" alt="">
                            </a>
                            <h4>{{ $item->Description }}</h4>
                            <h4>{{ $item->price }}</h4>
                            <h4>{{ $item->price }}</h4>
                            {{-- <h4>{{ $item->property_type->type }}</h4> --}}
                            <h4>{{ $item->agency->name }}</h4>
                            {{-- <h4>{{ $item->images }}</h4> --}}
                        </div>
                        @endforeach
                        

                </div>
            </div>
        </div>
    </div>
</div>

@endsection