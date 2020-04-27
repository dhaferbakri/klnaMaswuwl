@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Lorem ipsum dolor sit.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur iste molestias quisquam, dolore eum quos sint veritatis minima ratione.</p>
        </div>
        <form action="/permissions" method="POST" class="col-md-8 py-5">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
                {{ $errors->first('name') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="identity" placeholder=" National Identity Or Iqamah">
                {{ $errors->first('identity') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone +966...">
                {{ $errors->first('phone') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City" >
                {{ $errors->first('city') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="district" placeholder="District" >
                {{ $errors->first('district') }}
            </div>
            <button type="submit" class="btn btn-lg btn-secondary">Submit</button>
            @csrf
        </form>
    </div>
</div>
@endsection
