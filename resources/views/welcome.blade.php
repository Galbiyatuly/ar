@extends('layouts.main')
@section('inside')
    </br>
    @if(session('successMsg'))
        <div class="'alert-success bg-warning" role="'alert" style="text-align: center">
            <h3> {{session('successMsg')}}</h3>
        </div>
    @endif
    @include('layouts.header')
@endsection
