@extends('layouts.master')

@section('content')

<div class="inner cover">
    <img class="img-fluid py-5" src="{{url('/images/main.png')}}" alt="" width="300px">
    <h1 class="cover-heading">ماهي الخدمة</h1>
    <p class="lead">استخرج تصريحك إلكترونيا خلال حظر التجول.</p>
    <p class="lead">
        <a href="/permissions/create" class="btn btn-lg btn-secondary">تقدم بالطلب</a>
    </p>
</div>

@endsection
