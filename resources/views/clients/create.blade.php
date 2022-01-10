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
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Surname</label>
                                <input type="text" name="surname" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Cell</label>
                                <input type="text" name="cell" class="form-control">
                            </div>
                            
                            
                            <div class="form-group mb-3">
                                <label for="">Sex</label>
                                <select name="sex" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Property Id</label>
                                <input type="text" name="propperty_id" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">National ID</label>
                                <input type="text" name="nationalId" class="form-control">
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