@extends('admin.layouts.main')
@section('content')

<form action="" method="GET">
  <div class="row">
    <div class="col">
      <label for="">Tên sản phẩm </label>
      <input type="text" class="form-control" name="keyword">
    </div>
  </div>
  <button type="submit">Tìm</button>
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Số phòng</th>
      <th scope="col">Dịch vụ</th>
      <th scope="col">Floor</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Detail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($room as $p)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$p->room_no}}</td>
      <td>
        @foreach($p->service as $c)
        {{$c->name}}
        @endforeach
      </td>
      <td>{{$p->floor}}</td>
      <td><img src="{{asset( 'storage/' . $p->image)}}" width="100" /></td>
      <td>{{$p->price}}</td>
      <td>{{$p->detail}}</td>
      <td>
        <a href="{{route('room.edit', ['id' => $p->id])}}" class="btn btn-info">Sửa</a>
        <a href="{{route('room.remove', ['id' => $p->id])}}" class="btn btn-danger">Xóa</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
<div class="d-flex justify-content-end">
        {{$room->links()}}
    </div>
@endsection