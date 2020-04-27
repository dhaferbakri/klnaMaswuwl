@extends('layouts.master')

@section('content')

<h1>التصاريح الصادرة لك </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الاسم</th>
      <th scope="col">الهوية</th>
      <th scope="col">الجوال</th>
      <th scope="col">المدينة</th>
      <th scope="col">الحي</th>
      <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($permissions as $permission)
    <tr>
      <th scope="row"><a href="/permissions/{{ $permission->id }}">{{ $permission->id }}</a></th>
      <td>{{ $permission->name }}</td>
      <td>{{ $permission->identity }}</td>
      <td>{{ $permission->phone }}</td>
      <td>{{ $permission->city }}</td>
      <td>{{ $permission->district }}</td>
      <td><a class="btn btn-secondary" href="/permissions/{{ $permission->id }}">عرض</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
