@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>View</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit!</p>
        </div>
        <div class="col-md-6 py-5">
        <table class="table">
        <thead>
        <tr>
            <th scope="col">Name:</th>
            <th scope="col">{{ $permission->name}}</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">identity:</th>
            <td>{{ $permission->identity}}</td>

        </tr>
        <tr>
            <th scope="row">Phone</th>
            <td>{{ $permission->phone}}</td>

        </tr>
        <tr>
            <th scope="row">City</th>
            <td>{{ $permission->city}}</td>

        </tr>
        <tr>
            <th scope="row">District</th>
            <td>{{ $permission->district}}</td>

        </tr>
        </tbody>
        </table>
        </div>
        <div class="col-md-6 py-5">
            <img class="img-fluid" src="{{url('/images/ihr_qr_code_ohne_logo.png')}}" alt="Image" width="300px"/>
        </div>
    </div>

@endsection
