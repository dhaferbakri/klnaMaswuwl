@extends('layouts.master')

@section('content')

<div class="inner cover">
    <img class="img-fluid py-5" src="{{url('/images/main.png')}}" alt="" width="300px">
    <h1 class="cover-heading">tasrih?</h1>
    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis ut dolores odit <br>architecto vel, nemo officiis molestias modi quidem expedita Quibusdam.</p>
    <p class="lead">
        <a href="/permissions/create" class="btn btn-lg btn-secondary">Submit</a>
    </p>
</div>

@endsection
