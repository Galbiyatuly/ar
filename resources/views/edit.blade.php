@extends('layouts.app')
@section('content')
    <div class="container mt-2">

        <div class="alert alert-dark" role="alert" style="text-align: center">
            Edit Students
        </div>
        <form action="{{route('update', $student->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="exampleInputText">Name</label>
                <input type="text" class="form-control" value="{{$student->name}}" placeholder="name" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" value="{{$student->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>

            <div class="form-group">
                <label for="exampleInputText">Phone number</label>
                <input type="text" class="form-control" value="{{$student->phone}}" placeholder="phone number" name="phonenumber" >
            </div>

            <button type="submit" class="btn btn-primary">Add</button>

        </form>
    </div>
@endsection
