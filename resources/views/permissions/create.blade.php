@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>نموذج الطلب</h1>
            <p>قم بتعبئة بياناتك وستحصل على الخدمة ، سيتم إصدار التصريح وتحديد وقت الخروج بناء على عدد المتقدمين للخروج في الحي الذي تسكنه تجنبا للزحام.</p>
        </div>
        <form action="/permissions" method="POST" class="col-md-8 py-5">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="الاسم">
                {{ $errors->first('name') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="identity" placeholder=" رقم الهوية او الاقامة">
                {{ $errors->first('identity') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="رقم الجوال">
                {{ $errors->first('phone') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="المدينة" >
                {{ $errors->first('city') }}
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="district" placeholder="الحي" >
                {{ $errors->first('district') }}
            </div>
            <button type="submit" class="btn btn-lg btn-secondary">ارسال الطلب</button>
            @csrf
        </form>
    </div>
</div>
@endsection
