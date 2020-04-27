@extends('layouts.master')

@section('content')

<h1>Permits</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">National Identity</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">District</th>
      <th scope="col">District</th>
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
      <td><a class="btn btn-secondary" href="/permissions/{{ $permission->id }}">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
