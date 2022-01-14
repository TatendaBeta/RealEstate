@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>PROPERTY DETAILS
                            <a href="{{url('property')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{url('add-property')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Type ID</label>
                                <select name="type_id" class="form-control">
                                    @foreach ($property_types as $item)
                                       <option value="{{$item->id}}">{{$item->type}}</option> 
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Location</label>
                                <input type="text" name="location" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Agency</label>
                                {{-- <input type="text" name="agency_id" class="form-control"> --}}
                                <select name="agency_id" class="form-control">
                                    @foreach ($agenciess as $item)
                                       <option value="{{$item->id}}">{{$item->name}}</option> 
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <input type="text" name="Description" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">Image</label>
                                <input type="file" name="images" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                              <button type="submit" class="btn btn-primary">Save Property</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection