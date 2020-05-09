@extends('layouts.app')
@section('content')
    @if(session('successMsg'))
        <div class="'alert-success" role="'alert" style="text-align: center">
            {{session('successMsg')}}
        </div>
    @endif
    @if (Route::has('login') )

        @auth
    <div class="container mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student ->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone }}</td>
                    <td><a href="{{route('edit', $student->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                     or
                        <form method="post" id="delete-form- {{$student->id}}" action="{{route('delete', $student->id)}}" style="display: none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                        </form>

                        <button onclick="if (confirm('Are you sure to delete this field')){

                                event.preventDefault();
                                document.getElementById('delete-form- {{$student->id}}').submit();
                        }else{
                        event.preventDefault();
                                }
                        "><i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{$students->links()}}
    </div>
        @else
            <ul class="nav navbar-nav navbar-left">
                <a class="btn btn-primary bg-dark ember-view" href="/login"><strong>Log in</strong> </a>
            </ul>
            @endauth

        @endif

@endsection
