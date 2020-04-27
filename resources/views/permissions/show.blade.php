@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>التصريح</h1>
            <p>سيتحقق رجل الأمن من صلاحية التصريح من الـ "باركود" الذي يصدر مع التصريح</p>
            <p class="text-danger">ينتهي التصريح خلال ساعتين من تاريخ اصداره</p>
            <p></p>
            <p></p>
        </div>
        <div class="col-md-6 py-5">
        <table class="table">
        <thead>
        <tr>
            <th scope="col">الاسم:</th>
            <th scope="col">{{ $permission->name}}</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">رقم الهوية / الإقامة</th>
            <td>{{ $permission->identity}}</td>

        </tr>
        <tr>
            <th scope="row">الجوال</th>
            <td>{{ $permission->phone}}</td>

        </tr>
        <tr>
            <th scope="row">المدينة</th>
            <td>{{ $permission->city}}</td>

        </tr>
        <tr>
            <th scope="row">الحي</th>
            <td>{{ $permission->district}}</td>
        </tr>
        <tr>
            <th scope="row">وقت الخروج</th>
            <td>{{ $permission->created_at}}</td>

        </tr>
        <tr>
            <th scope="row">الحالة</th>
            <td class="text-success" >التصريح غير منتهي الصلاحية</td>

        </tr>
        </tbody>
        </table>
        </div>
        <div class="col-md-6 py-5">
            <img class="img-fluid" src="{{url('/images/ihr_qr_code_ohne_logo.png')}}" alt="Image" width="300px"/>
        </div>
    </div>

@endsection
