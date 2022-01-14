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
                        <h4>Client Details
                            <a href="{{url('property')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{url('add-property')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">property ID</label>
                                <input type="text" name="property_id" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Client ID</label>
                                <input type="text" name="client_id" class="form-control">
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