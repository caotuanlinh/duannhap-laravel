@extends('admin.layouts.main')
@section('title','Trang dịch vụ')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Tên dịch vụ</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
      @foreach($servi as $p)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$p->id}}</td>
      <td>{{$p->name}}</td>

      <td>
      <a href="{{route('servi.edit', ['id' => $p->id])}}" class="btn btn-info">Sửa</a>
      <a href="{{route('servi.remove', ['id' => $p->id])}}" class="btn btn-danger">Xóa</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection