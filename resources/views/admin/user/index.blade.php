@extends('admin.layouts.main')
@section('title','Trang quản lý người dùng')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Tên người dùng</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_number</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($user as $p)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$p->id}}</td>
      <td>{{$p->name}}</td>
      <td>{{$p->email}}</td>
      <td>{{$p->phone_number}}</td>

      <td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection