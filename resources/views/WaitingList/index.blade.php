@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">UserId</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Property ID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            {{-- <td>{{$item->users->name}}</td> --}}
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->userss->name}}</td>
            {{-- @foreach ($waitinglists as $item)
            <td>{{$item->property_id}}</td>
            @endforeach --}}
           
           
          </tr>
        @endforeach
    
      
    </tbody>
  </table> 
@endsection