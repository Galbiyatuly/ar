@extends('layouts.app')
@section('content')
<div class="container mt-2">

            <div class="alert alert-dark" role="alert" style="text-align: center">
                Add Students
            </div>
            <form action="{{route('store')}}" method="post">
@csrf

                    <div class="form-group">
                        <label for="exampleInputText">Name</label>
                        <input type="text" class="form-control" placeholder="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputText">Phone number</label>
                        <input type="text" class="form-control" placeholder="phone number" name="phonenumber" >
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>

            </form>
</div>
@endsection
